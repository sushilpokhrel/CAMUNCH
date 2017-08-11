<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostVacancyController extends Controller
{
    public function show(){
        return view('content.vacancy.postvacancy');
    }
}
