<?php

namespace App\Http\Controllers;


use App\Homepage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    public function index(){
        $cover = Homepage::first();
        return view('adminpanel.home.home',compact('cover'));
    }
    public function create(){
        return view('adminpanel.home.addcover');

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function store(Request $request){
        $input = $request->all();
        $image=$request->coverimage;
//        dd($image->getClientOriginalExtension());
        $input['coverimage'] = $filename=time().'.'.$image->getClientOriginalExtension();

//        Image::make(Request::capture()->file('coverimage'))->save(public_path('/images/'.$filename));
        Image::make(Request::capture()->file('coverimage'))->save( public_path('/images/' . $filename ) );
        Homepage::create($input);
        session()->put('message', 'Added Sucessfully');
        return redirect('/index');
    }
    public function update(Request $request, $id){

    }
    public function destroy($id){
        $cover = Homepage::find($id);
        $cover->delete();
        session()->put('message', 'Deleted Sucessfully');
        return redirect()->back();

    }
}
