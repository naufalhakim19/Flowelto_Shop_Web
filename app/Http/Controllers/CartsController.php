<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Flower;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartsController extends Controller
{
    public function addtocarts(Request $request, $flowerID){
        $userID = Auth::user()->id;
        DB::table('carts')->insert([
            'userID' => $userID,
            'quantity' => $request->quantity,
            'flowerID' => $flowerID
        ]);
        return Redirect('/');
    }
    public function carts(){
        
        $userID = Auth::user()->id;
        
        $carts = Cart::where('userID',$userID)->get();
        return view('cart')->with('carts',$carts);
    }
    public function updatequantity($cartID, Request $request){
        DB::table('carts')->where('id', $cartID)->update([
            'quantity'=> $request->quantity
        ]);
        return Redirect('/carts');
    }
    // untuk fungsi pada bagian checkout
    public function checkout(){
        $userID = Auth::user()->id;
        $date = Carbon::now('Asia/Jakarta');

        DB::table('transactions')->insert([
            'userID' => $userID,
            'transactionDate' => $date
        ]);

        $transactionID = Transaction::where('userID',$userID)->get()->last()->id;
        $carts = Cart::where('userID',$userID)->get();

        foreach($carts as $cart){
            DB::table('transactiondetails')->insert([
                'flowerID' => $cart->flowerID,
                'transactionID'=> $transactionID,
                'quantity' => $cart->quantity,
                'subTotal' => $cart->quantity * $cart->flower->flowerPrice
            ]);
        }
        //untuk mendelete cart
        DB::table('carts')->where('userID',$userID)->delete();

        return redirect('/');
    }
}
