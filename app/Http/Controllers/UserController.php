<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //loadallusers here
    public function loadAllUsers(){
       $all_users = User::all();
        return view('users',compact('all_users'));
    }
    public function registerUser(){
        return view('add-user');
    }

    public function AddUser(Request $request){
       //return
       // dd('yea');
      // dd($request->all());
 $request -> validate([
    'full_name' => 'required|string',
     'email' => 'required|email:User',
     'phone_number' => 'required',
     'password' => 'required|confirmed|min:4|max:6',
    ]);
 try {
    //code...
    //register user here
 $new_user = new User;
 $new_user -> name = $request ->  full_name;
 $new_user -> email = $request -> email;
$new_user -> phone_number = $request -> phone_number;
 $new_user -> password = Hash::make($request -> password);
$new_user -> save();
 return redirect('/users')->with('success','user added successfully');
 } catch (\Exception $e) {

    //throw $th;
     return redirect('/add/user')->with('fail',$e->getMessage());

 }
}

 //public function loadDeleteUser($id){
   //try {
      //code...
     // User::where('id',$id)->delete();
     // return redirect(/users)->with('success','user deleted successfully');
 // } catch (\Exception $e) {
      //throw $th;
   //  return redirect(/users)->with('fail',$e->getMessage());
  // }

 

     
}
