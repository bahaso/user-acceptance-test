<?php
namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;
class UpdateController extends Controller
{
    public function index($id)
{
	$users = DB::table('users')->where('id',$id)->get();
	return view('frontend.modifyuser',['users' => $users, 'id'=>$id]);
}
public function do_update(Request $request)
{

	if($request->password ==NULL){

	}else{
		DB::table('users')->where('id',$request->id)->update([
			'name' => $request->name,
			'email' => $request->email,
		]);
	}

	return redirect('/userlist');
}

}
