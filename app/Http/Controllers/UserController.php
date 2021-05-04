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
			echo "<script>alert('Sign up successfull!');</script>";
		}
		return view('index');
		/*$hashedPassword= Hash::make($password);
		if (Hash::check('krutika', $hashedPassword)) {
    		echo "passwords match";
		}*/
	}
	public function loginUser(Request $req){
		$user=User::where(['email'=>$req->email])->first();
		if($user || Hash::check($req->password,$user->password)){
			$req->session()->put('user',$user);
			return redirect('/');
		}
		else{
			return "Username or password is not matched";
		}
	}
}
