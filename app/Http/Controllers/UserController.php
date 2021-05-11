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
        'ph_num'=>'required|size:10',
        'password'=>'required|min:5'
    	]);
		$user=new User;
		$user->name=$req->name;
		$user->email=$req->email;
		$user->ph_num=$req->ph_num;
		$password=$req->password;
		$user->password = Hash::make($password);
		$saved=$user->save();
		if(!$saved){
		    echo "<script>alert('Sign up unsuccessfull!');</script>";
		}
		else{
			$req->session()->put('user',$user);
			$req->session()->put('usertype','customer');
			echo "<script>alert('Sign up successfull!');</script>";
		}
		return redirect('/');
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
				return redirect('admin_main');
			}
			else{
				return redirect('/');
			}
			
		}
		else{
			echo "<script>alert('Username or password is not matched');</script>";
			return view('login');
		}
	}
}
