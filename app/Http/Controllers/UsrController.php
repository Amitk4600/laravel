<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsrController extends Controller
{
   public function showUsrs()
   {
      $usrs = DB::table('usrs')
         // ->orderBy('age', 'desc')
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

   // add user
   public function addUser()
   {
      // $user = DB::table('usrs')->insert([
      //    [
      //       'name' => 'rahul-kumar',
      //       'email' => 'rahul-kumar@example.com',
      //       'age' => 60,
      //       'city' => 'haryana',
      //       'created_at' => now(),
      //       'updated_at' => now()
      //    ],
      //    [
      //       'name' => 'rkumar',
      //       'email' => 'rkumar@example.com',
      //       'age' => 23,
      //       'city' => 'hisar',
      //       'created_at' => now(),
      //       'updated_at' => now()
      //    ],
      //    [
      //       'name' => 'rk',
      //       'email' => 'rk@example.com',
      //       'age' => 65,
      //       'city' => 'hansi',
      //       'created_at' => now(),
      //       'updated_at' => now()
      //    ]
      // ]);
      $user = DB::table('usrs')->insertGetId([
         'name' => 'rkg',
         'email' => 'rkg@example.com',
         'age' => 65,
         'city' => 'hisar',
         'created_at' => now(),
         'updated_at' => now()
      ]);
   }


   public function updateUser()
   {
      $user = DB::table('usrs')
         ->where('id', 9)
         // ->update(['city' => 'mumbai']);
         // ->updateOrInsert(
         //    [
         //       'email' => 'rk@gmail',
         //       'name' => 'rk'
         //    ],
         //    [
         //       'age' => 22,
         //       'city' => 'haryana'
         //    ]
         // );
         ->increment('age');
   }
   public function deleteUser()
   {
      $user = DB::table('usrs')->where('id',5)
      ->delete();
   }

   public function deleteUer(string $id)
   {
      $user = DB::table('usrs')->where('id',$id)
      ->delete();
      if($user){
         return redirect()->route('usrs');
      }
   }
}
