<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsDetailsController extends Controller
{
    public function show($id){
        $article = News::find($id);
        return view('content.newsdetails',compact('article'));

    }
}
