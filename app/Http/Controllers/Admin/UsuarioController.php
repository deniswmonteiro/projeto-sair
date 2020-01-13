<?php

namespace projetoautomacao\Http\Controllers\Admin;

use Illuminate\Http\Request;
use projetoautomacao\Http\Controllers\Controller;
use projetoautomacao\User;

class UsuarioController extends Controller
{
    private $usuario;

	public function __construct(User $usuario) 
	{
		$this->usuario = $usuario;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = $this->usuario->all(['nome', 'email', 'categoria', 'laboratorio']);
        return view('admin/usuarios', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($usuario)
    {
        $usuarios = $this->usuario->findOrFail($usuario);
        return view('admin/usuarios/editarusuario', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $usuario)
    {
        $data = $request->all();
        $usuario = $this->usuario::findOrFail($usuario);
        $usuario->update($data);
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuario)
    {
        $usuario = $this->usuario::find($usuario);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
