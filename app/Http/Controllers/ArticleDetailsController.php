<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleDetailsController extends Controller
{
    public function show($id){
        $article = Article::find($id);
        return view('content.articles.articledetails',compact('article'));
    }
}
