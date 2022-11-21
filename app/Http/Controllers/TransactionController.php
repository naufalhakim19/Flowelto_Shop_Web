<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Transactiondetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function Transaction(){
        $userID = Auth::user()->id;
        $transactions = Transaction::where('userID',$userID)->get();
        return view('transaction')->with('transactions',$transactions);
    }

    public function TransactionDetail($transactionID){

        $transaction = Transactiondetail::where('transactionID', $transactionID)->get();

        return view('transactionDetail')->with('transaction',$transaction);
    }
}
