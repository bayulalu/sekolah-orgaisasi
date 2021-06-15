<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth2.login');
    }

    public function postLogin(Request $request)
    {
        // die('mask');

        $this->validate($request, [
            'user' => 'required',
            'password' => 'required'
        ]);


        $users = auth()->attempt(['user' => $request->user, 'password' => $request->password]);

        if (!$users) {
            return redirect()->back()->withInput($request->only('user', 'password'));
        }

        return redirect()->route('home');
    }

    public function registerUser()
    {
        if(Auth::user()->level != 1){
            return redirect()->route('home');

        }


        return view('auth2.register');
    }

    public function storeUser(Request $request)
    {

        if(Auth::user()->level != 1){
            return redirect()->route('home');

        }

        $this->validate($request, [
            'name' => 'required',
            'user' => 'required|unique:users',
            'organisasi' => 'required',
            'password' => 'required|string'
        ]);


      User::create([
            'name' => $request->name,
            'user' => $request->user,
            'status' => $request->organisasi,   
            'password' =>  bcrypt($request->password),
            'level' => 2,
        ]);

        return redirect()->route('register')->with('msg','User Berhasil Di Tambah');


    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
