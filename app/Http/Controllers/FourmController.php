<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class FourmController extends Controller
{
    public function index(){
        $questions = Question::where('isApproved',1)->paginate(10);
        return view('content.forum',compact('questions'));
    }
    public function ask(Request $request){
        $input = $request->all();
        Question::create($input);
        return redirect()->back();

    }
    public function show($id){
        $question = Question::find($id);
        return view('content.forumdetails',compact('question'));
    }
    public function showQuestion(){
        $questions = Question::all();
        return view('adminpanel.question',compact('questions'));
    }
    public function approve($id){
        $question = Question::find($id);
        $question->isApproved = 1;
        $question->save();
        return redirect()->back();
    }
    public function answer(Request $request,$id){
        $input = $request->all();
        $input['question_id'] = $id;
        Answer::create($input);
        return redirect()->back();
    }
    public function createAnswer($id){
        return view('adminpanel.answer',compact('id'));
    }

}
