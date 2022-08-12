<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    function index(){
        //dd($request->all());
        $blogs = DB::table('blogs')->where("active",1)->OrderBy("id","desc")->get();
        return view('blogs.index')->with("blogs",$blogs);
    }
    function create(){
        //dd($request->all());
        return view('blogs.create');
    }

    function insert(Request $request){
        //dd($request->all());
        $blogs = DB::table('blogs')->insert([
            'title' => $request->title,
            'active'=> $request->active,
            'description'=> $request->description,
        ]);
        return redirect()->to('blogs');
    }

    function edit(Request $request,$id){
        //dd($request->all());
        $blogs = DB::table('blogs')->where('id',$id)->first();
        //dd($blogs);
        return view('blogs.edit')->with('blogs',$blogs);
    }

    function update(Request $request,$id){
        //dd($request->all());
        $blogs_update = DB::table('blogs')->where('id',$id)->update([
            'title'=>$request->title,
            'active'=>$request->active,
            'description'=>$request->description,
        ]);
        return redirect()->to('blogs');
    }
}
