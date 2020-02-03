<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function __construct(){

    }

    public function admin(){
    	return view('backend.index');
    }

    public function setups(){
    	$data = DB::table('setups')->first();
    	return view('backend.insert.setup',['data'=>$data]);
    }

	public function categories(){
    	$data = DB::table('categories')->get();
    	return view('backend.insert.category',['data'=>$data]);
    }    

    public function deleteCategory($id){
    	$data = DB::table('categories')->where('cid',$id)->delete();
    	return redirect()->back()->with('message','Data Deleted Successfully');
    }

    public function editCategory($id){
    	$data = DB::table('categories')->get();
    	$maindata = DB::table('categories')->where('cid',$id)->first();
    	if($maindata){
    		return view('backend.edit.category',['data'=>$data,'maindata'=>$maindata]);
    	}else{
    		return redirect('categories');
    	}
    }

    public function newPost(){
    	$cats = DB::table('categories')->where('status','on')->get();
    	return view('backend.insert.newpost',['cats'=>$cats]);
    }

    public function allPosts(){
       	$data = DB::table('contents')->get();
    	return view('backend.display.posts',['data'=>$data]);
    }

    public function editPost($id){
    	$cats = DB::table('categories')->where('status','on')->get();
    	$data = DB::table('contents')->where('conid',$id)->first();
    	return view('backend.edit.editpost',['data'=>$data,'cats'=>$cats]);
    }

    public function deletePost($id){
    	$data = DB::table('contents')->where('conid',$id)->delete();
    	return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
