<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class PagesController extends Controller
{
    public function dashboard(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view ('frontend.dashboard');
        }
    }

    public function userlist(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $users = DB::table('users')->select('id','name','email')->get();

            return view('frontend.userlist')->with('users', $users);
        }
    }

    public function delete($id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $users = DB::table('users')->select('id','name','email')->get();
            DB::delete('delete from users where id = ?',[$id]);
            return view('frontend.userlist')->with('users', $users);
            
        }
    }

    public function updateform(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('frontend.modifyuser');
        }
    }

    public function projects(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        return view('frontend.projects');
        }
    }

    public function profile(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        
        return view('frontend.userprofile');
        }
    }



    public function showLogin(){
        return view('frontend.login');
    }

    public function doLogin(Request $req){
     // echo $req->email;
      $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3'
        );

        $email = $req->email;
        $password = $req->password;

        $data = Users::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('dashboard');
                
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }

        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }

/*
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
        
            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );


        }
        if (Auth::attempt($userdata)) {

            
             return Redirect::to('dashboard');
    
        } else {        
    
            // validation not successful, send back to form 
            return Redirect::to('login');
    
        } */
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }
   
}