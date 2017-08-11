<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class LawController extends Controller
{
    public function show(){
        $articles = Article::where('category','=','Law')->where('isApproved','1')->paginate(4);
        return view('content.articles.incometax',compact('articles'));
    }
}
