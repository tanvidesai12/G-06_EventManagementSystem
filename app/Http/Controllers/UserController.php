<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function registerUser(Request $req){
		$validated = $req->validate([
        'name' => 'required|min:3',
        'email' => 'required|unique:users,email',
        'phone_number'=>'required|digits:10',
        'password'=>'required|min:5'
    	]);
		$user=new User;
		$user->name=$req->name;
		$user->email=$req->email;
		$user->ph_num=$req->phone_number;
		$password=$req->password;
		$user->password = Hash::make($password);
		$saved=$user->save();
		if(!$saved){
		    return back()->withErrors('Sign up unsuccessfull!!');
		}
		else{
			$req->session()->put('user',$user);
			$req->session()->put('usertype','customer');
			return redirect('/')->with('message', 'Sign up successfull!!');
		}		
	}
	public function loginUser(Request $req){
		$validated = $req->validate([
        'email' => 'required|exists:users,email',
        'password'=>'required'
    	]);
		$user=User::where(['email'=>$req->email])->first();
		if($user && Hash::check($req->password,$user->password)){
			$req->session()->put('user',$user);
			$req->session()->put('usertype',$user->usertype);
			if(session('usertype')==='admin'){
				return redirect('admin_main')->with('message', 'Log in successfull!!');
			}
			else{
				return redirect('/')->with('message', 'Log in successfull!!');
			}
			
		}
		else{
			return back()->withErrors('Password is not matched.');
		}
	}
}
