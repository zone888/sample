<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UsersController extends Controller
{
	public function create(){
		return view('users.create');
	}
	public function show(User $user){
		return view('users.show',compact('user'));
	}
	public function store(Request $request){
		$this->validate($request,[
			'name'=>'required|max:50',
			'email'=>'required|email|unique:users|max:255',
			'password'=>'required|confirmed|min:6']);
		$user = User::create([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>bcrypt($request->password),
		]);
		Auth::login($user);
		session()->flash('success','恭喜你开启一段全新旅程');
		return redirect()->route('users.show',[$user]);
	}	//
}
