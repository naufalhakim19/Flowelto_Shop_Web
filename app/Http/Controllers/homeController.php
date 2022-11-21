<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Flower;

class homeController extends Controller
{
    public function view(){
        $category = Category::all();
        return view('home')->with('category',$category);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    //untuk menampilakan page
    public function Flower($category_id){
        $flowers = Flower::where('categoryID',$category_id)->paginate(8);
        return view('categoryFlower')->with('flowers',$flowers);
    }

    public function FlowersDetail($flowers_id){
        $flowersDetail = Flower::where('id',$flowers_id)->first();
        return view('flowersDetail')->with('flowersDetail',$flowersDetail);
    }
}
