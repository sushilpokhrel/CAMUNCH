<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostNewsController extends Controller
{
    public function show(){
        return view('content.postnews');
    }
}
