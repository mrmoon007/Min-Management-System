<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\allPost;


class postController extends Controller
{
    public function valueShow(){
        return view('category.index');
    }

    public function valueInsert(){
        return view('category.home');
    }

    public function valueSubmit( Request $request){

        allPost::insert([
            'name'=>$request->name ,
            'email'=>$request->email ,
            'phone'=>$request->phone ,
            'message'=>$request->message ,
        ]);
        return view('category.home');
    }
    public function valueAllShow(){
        $allpost=allPost::all();
        return view('category.show',compact('allpost'));
    }

    public function valueUpdate(Request $request,$id){
           $updateValue=allPost::find($id)->update([
             'name'=>$request->name ,
              'email'=>$request->email ,
              'phone'=>$request->phone ,
              'message'=>$request->message ,
            ]);
           return redirect()->route('allDataShow');
        //return response()->json($request);
    }

    public function valueEdit($id){
          $editValue=allPost::find($id);
          return view('category.edit',compact('editValue'));
        //return response()->json($editValue);

    }

    public function valueDelete($id){
        $deleteValue=allPost::find($id);
        $deleteValue->delete();
        return redirect()->back();

    }
    public function valueSearch(){
        $searchValue=$_GET['searchData'];
        $searchItem=allPost::where('name','LIKE','%'.$searchValue.'%')->get();
        return view('category.search',compact('searchItem'));

    }
}
