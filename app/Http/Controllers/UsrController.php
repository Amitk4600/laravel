<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsrController extends Controller
{
   public function showUsrs()
   {
      $usrs = DB::table('usrs')
      ->orderBy('age','desc')
      // ->where('name', 'like', 'A%')
      // ->orWhere('age','<',20)
      ->get();

      // return $usrs;
      return view('allUsrs', ['data' => $usrs]);
   }

   public function single_User(string $id)
   {

      $single_Usr = DB::table('usrs')->where('id', $id)->get();
      return  view('singleUsrs', ['data' => $single_Usr]);
   }
}
