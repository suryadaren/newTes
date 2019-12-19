<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class usercontroller extends Controller
{
    public function index(){
    	$users = user::get();
    	return view('index',compact('users'));
    }
    public function create(){
    	return view('create');
    }
    public function simpanUser(Request $request){
    	User::create([
    		"nama" => $request->nama,
    		"alamat" => $request->alamat,
    		"usia" => $request->usia,
    		"email" => $request->email,
    		"telepon" => $request->telepon,
    		"password" => bcrypt($request->password),
    		"role" => $request->role,
    	]);

    	$message = array(
		    'message' => 'Berhasil menyimpan data',
		    'alert-type' => 'success'
		);
    	return back()->with($message);
    }
    public function edit($id){
    	$users = user::find($id);
    	return view('edit',compact('users'));
    }
    public function updateUser($id, Request $request){
    	$user = user::find($id);
    	$user->update([
    		"nama" => $request->nama,
    		"alamat" => $request->alamat,
    		"usia" => $request->usia,
    		"email" => $request->email,
    		"telepon" => $request->telepon,
    		"password" => bcrypt($request->password),
    		"role" => $request->role
    	]);

    	$message = array(
		    'message' => 'Berhasil mengupdate data',
		    'alert-type' => 'success'
		);
    	return back()->with($message);
    }
    public function delete($id){
    	$user = user::find($id);
    	$user->delete();
    	$message = array(
		    'message' => 'Berhasil menghapus data',
		    'alert-type' => 'success'
		);
    	return back()->with($message);
    }

    public function login(){
    	return view('login');
    }

    public function checkLogin(Request $request){
        if(auth()->attempt(array('email' => $request->email, 'password' => $request->password, 'role' => 'administrator'))){
    	$message = array(
		    'message' => 'Berhasil Login',
		    'alert-type' => 'success'
		);
        	return view('administrator')->with($message);
        }
        elseif(auth()->attempt(array('email' => $request->email, 'password' => $request->password, 'role' => 'officer'))){
    	$message = array(
		    'message' => 'Berhasil Login',
		    'alert-type' => 'success'
		);
        	return view('officer')->with($message);
        }
        elseif(auth()->attempt(array('email' => $request->email, 'password' => $request->password, 'role' => 'user'))){
    	$message = array(
		    'message' => 'Berhasil Login',
		    'alert-type' => 'success'
		);
        	return view('user')->with($message);
        }
        else{
    	$message = array(
		    'message' => 'Data yang di masukan Salah',
		    'alert-type' => 'error'
		);
        	return back()->with($message);
        }
        
    }
}
