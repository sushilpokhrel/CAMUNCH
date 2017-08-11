<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function show(){
        return view('content.articles.finance');
    }
}
