<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class RegisterController extends Controller
{
    public function registration(){
        
        return view('frontend.registeruser');
    }

    public function doRegistration (Request $req){

        $rules = array(
            'name'     => 'required',
            'email'    => 'required|email', // make sure the email is an actual email
          
        );

        $data =  new Users();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->username = "";
        $data->password = bcrypt($req->password);
        $data->save();
        return redirect('/dashboard')->with('alert-success','Kamu berhasil Register');

    }
}
