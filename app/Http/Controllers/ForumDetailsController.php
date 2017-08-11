<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumDetailsController extends Controller
{
    public function show(){
        return view('content.forumdetails');
    }
}
