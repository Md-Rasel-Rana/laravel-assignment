<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
public function index(Request $request){
      $user = DB::table("studentsinfo")->get();

  
      return view("pages.trail",compact("user"));
}
public function create(Request $request){
     
      return view("pages.form");
}
public function store(Request $request){
      $validatedData = $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'address' => 'required',
            'batch' => 'required',
        ]);

        $data = [
            'name' => $validatedData['name'],
            'roll' => $validatedData['roll'],
            'address' => $validatedData['address'],
            'batch' => $validatedData['batch'],
            // Add other fields if necessary
        ];

        DB::table('studentsinfo')->insert($data);
     
        return redirect('/')->with('success', 'Added the data to the database');
      
       
}

public function delete($id){  
    DB::table('studentsinfo')->where('id',$id)->delete();
    return redirect('/')->with('success', 'Added the data to the database');
}
public function edit($id){  
   $user= DB::table('studentsinfo')->where('id',$id)->first();
    return view('pages.edit',compact('user'));
}
public function update(Request $request,$id){  
      $validatedData = $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'address' => 'required',
            'batch' => 'required',
        ]);

        $data = [
            'name' => $validatedData['name'],
            'roll' => $validatedData['roll'],
            'address' => $validatedData['address'],
            'batch' => $validatedData['batch'],
            // Add other fields if necessary
        ];
      DB::table('studentsinfo')->where('id',$id)->update($data);
   return redirect('/')->with('success', 'update the data to the database');
}









}