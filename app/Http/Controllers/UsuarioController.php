<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\interesse;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function infor_store(Request $request){
        if(Auth::check()==true){
            $interesse= new interesse();
            $interesse->id_usuario=Auth::user()->id;
            $interesse->id_carro=$request->id;
            $interesse->save();
            return redirect()->route('infor',['carro'=>$request->id]);
        }else{
            return redirect()->route('login',['id'=>$request->id]);
        }

    }
    
    public function login_store(Request $request){
        $credentials =[
            'email'=> $request->email,
            'password'=>$request->password
        ];
      if(Auth::attempt($credentials))
        if($request->id!=0)
            return redirect()->route('infor',['carro'=>$request->id]);
        else{
            return redirect()->route('home');
        }
        return redirect()->route('login',['id'=>0]);
    }
    public function login_admin_store(Request $request){
        $credentials =[
            'email'=> $request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($credentials) && Auth::user()->id_tipo==2)
            return redirect()->route('gestao',0);
        else
            return redirect()->route('login.admin');
    }
    public function store(Request $request)
    {
        //INSIRINDO DADOS NO BASE DE DADOS
        if(!empty($request->nome)&& !empty($request->senha)&& !empty($request->email) && !empty($request->data) && !empty($request->sexo)){
            $usuario= new usuario();
            $usuario->nome=$request->nome;
            if(!empty($request->senha))
                $usuario->senha=Hash::make($request->senha);
            $usuario->email=$request->email;
            $usuario->id_tipo=1;
            $usuario->data_nascimento=$request->data;
            $usuario->genero=$request->sexo;
            $usuario->telefone=$request->telefone;
            $usuario->save();
            return redirect()->route('login',['id'=>$request->id]);
        }
        return redirect()->route('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        return view("wilsardcar.home");
    }
    
    public function login(Request $request){
        if(empty($request->id))
            $request->id =0;
        return view("wilsardcar.login",['id'=>$request->id]);
    }
    public function loginadmin(){
        return view("wilsardcar.loginadmin");
    }

    public function logout(){

    }

    public function createacount(){

        return view("wilsardcar.create");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(interesse $interesse)
    {
        $interesse->delete();
        return redirect()->route('gestao.user');
    }
}
