<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class crudController extends Controller
{
    public function insertData(){
     	$data = Input::except('_token','submit');
     	$tbl = decrypt($data['tbl']);
     	unset ($data['tbl']);
      
      if(!empty($data['image'])){
        if(Input::hasFile('image')){
          $data['image'] = $this->upload($data['image'], $tbl);
        }
      }  

      if(input::has('title')){
        $data['slug'] = $this->slug($data['title']);
      }

      $data['created_at'] = date('Y-m-d H:i:s');
      DB::table($tbl)->insert($data);

      session::flash('message','Data inserted successfully!!!');
      return redirect()->back();
    }

    public function updateData(){
      $data = Input::except('_token','submit');
      $tbl = decrypt($data['tbl']);
      unset ($data['tbl']);
      
      if(!empty($data['image'])){
        if(Input::hasFile('image')){
          $data['image'] = $this->upload($data['image'], $tbl);
        }
      }  

      if(input::has('title')){
        $data['slug'] = $this->slug($data['title']);
      }

      $data['updated_at'] = date('Y-m-d H:i:s');
      DB::table($tbl)->where(key($data),reset($data))->update($data);

      session::flash('message','Data Updated successfully!!!');
      return redirect()->back();
    }

    private function upload($image,$tbl){
      $name = $image->getClientOriginalName();
      $newName = date('ymdgis').$name;
      $image->move(public_path().'/'.$ble,$newName);
      return $newName;
    } 

    private function slug($string){
      $string = strtolower(trim($string));
      $string = preg_replace('/\s+/', '-', $string);
      $string = preg_replace('/[^a-z0-9-]/', '-', $string);
      $string = preg_replace('/-+/', '-', $string);
      return rtrim($string,'-');
    }
}

