<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostArticleController extends Controller
{
    public function show(){
        return view('content.articles.postarticle');
    }
}
