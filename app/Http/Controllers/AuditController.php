<?php

namespace App\Http\Controllers;

use App\Vacancy;
use App\VacancyApplication;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function index(){
        $vacancies = Vacancy::where('title','=','0')->paginate(5);
        return view('content.vacancy.audit',compact('vacancies'));
    }
    public function show($id){
        $vacancy = Vacancy::find($id);
        return view('content.vacancy.audit',compact('vacancy'));
    }
    public function apply($id){
        return view('content.vacancy.apply',compact('id'));
    }
    public function upload(Request $request){
        $input = $request->all();
        if($resume = $request->file('resume')){

            $name = $resume->getClientOriginalName();
            $resume->move('resume/', $name);
            $input['resume'] = $name;

        }
        if($coverletter = $request->file('cover_letter')){

            $a = $coverletter->getClientOriginalName();
            $coverletter->move('coverletter/', $a);
            $input['cover_letter'] = $a;

        }
        VacancyApplication::create($input);
        return redirect('/');
    }
}
