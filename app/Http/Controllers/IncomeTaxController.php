<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class IncomeTaxController extends Controller
{
    public function show(){
        $articles = Article::where('category','=','Income Tax')->where('isApproved','1')->paginate(4);
        return view('content.articles.incometax',compact('articles'));
    }
}
