<?php

namespace App\Http\Controllers;

use App\Vacancy;
use Illuminate\Http\Request;

class QualifiedController extends Controller
{
    public function show(){
        $vacancies = Vacancy::where('title','=','1')->paginate(5);
        return view('content.vacancy.qualified',compact('vacancies'));
    }
}
