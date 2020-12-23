<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function grade(){
        return view('grade');
      }


    public function monthly1(){
      $data = DB::table('subj_stud')->get();
      return view('monthly1', ['data'=>$data]);
    }
  
}
