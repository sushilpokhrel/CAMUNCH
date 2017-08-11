<?php

namespace App\Http\Controllers;

use App\Vacancy;
use App\VacancyApplication;
use Response;

class VacancyDetailsController extends Controller
{
    public function show($id){
        $vacancy = Vacancy::find($id);
        return view('content.vacancy.vacancydetails',compact('vacancy'));
    }
    public function showApplicants($id){
        $a = VacancyApplication::where('vacancy_id','=',$id)->get();
        return view('adminpanel.vacancy.applicants',compact('a'));
    }
    public function showr($id){
        $r = VacancyApplication::find($id);
        $filename = $r->resume;
        $path = public_path('resume/'.$filename);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
    public function showc($id){
        $r = VacancyApplication::find($id);
        $filename = $r->resume;
        $path = public_path('coverletter/'.$filename);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
