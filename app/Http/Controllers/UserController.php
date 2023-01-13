<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/userlist');
        }
    }




    function register(Request $req)
    {
         $user = new User;
         $user->name=$req->input('name');
         $user->email=$req->input('email');
         $user->password=Hash::make($req->input('password'));
         $user->save();
         $req->session()->flash('status','Resuest submited Successfully');
         return redirect('/login');
        
        }

    
    function userlist(Request $req){
        $data = User::all();
        if(session()->has('user')){
            return view('userlist',["data"=>$data]);
       }

          
          return redirect('/login');

    }    

    function delete($id){
        User::find($id)->delete();
       Session::flash("'status',User deleted Successfully");
       return redirect('/');

  } 


  function edit($id){
    $user = User::find($id);

    return view('updateuser',["item"=>$user]);


  }
  function update(Request $req){
    $user = User::find($req->input('id'));
    $user->name=$req->input('name');
    $user->email=$req->input('email');
    $user->password=Hash::make($req->input('password'));
    $user->save();
    $req->session()->flash('status','update submited Successfully');
    return redirect('/userlist');

}

}
