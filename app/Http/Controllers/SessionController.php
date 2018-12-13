<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionController extends Controller
{
    public function create(){
    	return view('sessions.create');
    }
    public function store(Request $request){
    	$credentials = $this ->validate($request,[
    		'email' => 'required|email|max:255',
    		'password'=>'required']);
    	if(Auth::attempt($credentials,$request->has('remember'))){
    		session()->flash('success','欢迎开启旅程');
    		return redirect()->route('users.show',[Auth::user()]);
    	}else{
    		session()->flash('danger','很抱歉您的密码和邮箱不匹配');
    		return redirect()->back();
    	}
    	
    }
    public function destroy(){
    	Auth::logout();
    	session()->flash('success','退出江湖');
    	return redirect('login');
    }
}
