<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
//        public function index(Request $request){
//            $data=[
//               1=>['name'=>'james1','email'=> 'info1@gmail.com','password'=> 'rasel127'],
//               2=> ['name'=>'james2','email'=> 'info2@gmail.com','password'=> 'rasel128'],
//               3=>['name'=>'james3','email'=> 'info3@gmail.com','password'=> 'rasel129'],
//            ];
      
//         return view("blog")->with('userdata', $data);
//        }    
//     public function showdata($id){
//        return "user: $id";

// }
  


public function index(Request $request){
 
       return view("blog");
}
public function store(Request $request){
      $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|max:55',
            'password' => 'required|min:6|max:15',
        ]);
     
      
     
        return redirect('/');
}









}