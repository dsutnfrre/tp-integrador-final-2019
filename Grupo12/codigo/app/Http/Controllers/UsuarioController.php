<?php

namespace Maxelec\Http\Controllers;

use Illuminate\Http\Request;

use Maxelec\Http\Requests\UsuarioCreateRequest;
use Maxelec\Http\Requests\UsuarioEditRequest;
use Maxelec\Usuario;
use Redirect;
use Session;


use Maxelec\Http\Controllers\Controller;

class UsuarioController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Usuario::All();
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        Usuario::create($request->all());
        //     'nombreUsuario' => $request['nombreUsuario'],
        //     'email'=> $request['email'],
        //     'fecha_creacion'=> $request['fecha_creacion'],
        //     'telefono'=> $request['telefono'],
        //     'password'=> $request['password'],
        // ]);
        Session::flash('message','Usuario creado Correctamente');
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Usuario::find($id);
        return view('usuarios.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioEditRequest $request, $id)
    {
        $user = Usuario::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuarios');
    }
}
