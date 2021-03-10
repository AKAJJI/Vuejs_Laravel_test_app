<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionsApiController extends Controller
{
    public function index(){
        return Transaction::all();
    }

    public function store(){
         Transaction::create([
            'products_ids' => request('products_ids'),
            'price'=> request('price')
        ]);
        return response()->json("Transaction effectuée avec succes");
    }
}
