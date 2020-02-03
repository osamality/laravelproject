<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class frontController extends Controller
{
    public function __construct(){

    }

    
    public function index(){
    	$setups = DB::table('setups')->first();
    	$cats = DB::table('categories')->where('status','on')->get();
      $home = DB::table('contents')->where('category','home')->first();
      $services = DB::table('contents')->where('category','services')->first();
      $services->slug = DB::table('categories')->where('title','services')->value('slug');
      return view('index',[
        'setups'=>$setups,
        'cats'=>$cats,
        'home'=>$home,
        'services'=>$services,
      ]);
    }



   public function sendMessage(){
   		$data = $_GET;
   		$data['created_at'] = date('Y-m-d H:i:s');
    	DB::table('contacts')->insert($data);

    	$output = 'Thank You for your Message. We will contact shortly.';
    	return response($output);

   }
}


