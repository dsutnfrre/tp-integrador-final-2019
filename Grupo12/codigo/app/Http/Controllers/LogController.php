<?php

namespace Maxelec\Http\Controllers;

use Illuminate\Http\Request;

use Maxelec\Http\Requests;
use Maxelec\Http\Controllers\Controller;
use Maxelec\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
// use Maxelec\Http\Request;
// use Illuminate\Http\Request\l
// use Maxelec\Http\Request\LoginRequest;


class LogController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function create()
    {
        
    }
    public function store(LoginRequest $request)
    {
        if(Auth::attempt(['nombreUsuario'=>$request['nombreUsuario'], 'password'=>$request['password']])){
            return Redirect::to('admin');
        }
        Session::flash('message-error','Los datos de autenticacion son incorrectos, por favor intente nuevamente o comuniquese con el administrador del sistema.');
        return Redirect::to('/log');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/log');
    }

    public function update()
    {
        
    }
   
}
