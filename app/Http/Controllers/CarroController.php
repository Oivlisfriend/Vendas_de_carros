<?php

namespace App\Http\Controllers;

use App\Models\carro;
use App\Models\usuario;
use App\Models\interesse;
use App\Models\marca;
use App\Models\bairro;
use App\Models\modelo;
use App\Models\imagem_carro;
use App\Models\tipocarro;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Faker\Provider\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cat)
    {
        if($cat==0)
            $car=carro::all();
        else if($cat==1)
            $car=carro::where('tipo',1)->get();
        else if($cat==2)
            $car=carro::where('tipo',2)->get();
        $modelo=modelo::all();
        $marca=marca::all();
        return view('wilsardcar.menucliente',
            ['cat'=>$cat, 'car'=>$car,'marca'=>$marca,'modelo'=>$modelo]);
    }
    public function infor(carro $carro){
        $valor=1;
        if(Auth::check()==true)
            $interesse=interesse::where('id_usuario',Auth::user()->id)->where('id_carro',$carro->id)->first();
        if(!empty($interesse))
            $valor=0;
        $imagem=imagem_carro::where('id_carro',$carro->id)->get();
        $modelo=$carro->modelos()->first();
        $marca=marca::where('id',$modelo->id_marca)->first();
        $localizacao=bairro::where('id',$carro->localizacao)->first();
        return view('wilsardcar.desccar',[
            'carro'=>$carro,
            'imagem'=>$imagem,
            'modelo'=>$modelo, 
            'marca'=>$marca,
            'localizacao'=>$localizacao,
            'valor'=>$valor
        ]
    );
    }

    public function gestao($car){
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            if(empty(carro::where('id',$car)->first()))
                $carro=carro::all()->first();
            else
                $carro=carro::where('id',$car)->first();
            $carros= carro::all();
            $modelo=modelo::all();
            $bairro= bairro::all();
            $tipo= tipocarro::all();  
            return view('wilsardcar.gestor',
            [   'car'=>$carro,
                'model' => $modelo,
                'bairro'=>$bairro,
                'carros'=> $carros,
                'tipo'=>$tipo
                ]
            );
        }
        return redirect()->route('login.admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function marca($marca)
    {
        //
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            if(empty(marca::where('id',$marca)->first()))
                $marc=marca::all()->first();
            else
                $marc=marca::where('id',$marca)->first();
            $marcas=marca::all();
            return view('wilsardcar.marca',[
                'marca' => $marca,
                'marc'=>$marc,
                'marcas'=>$marcas
            ]);
        }
        return redirect()->route('login.admin');
    }
    public function marca_store(Request $request)
    {
        //
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            $marca= new marca();
            $marca->nome_marca=$request->marca;
            $marca->save();
            $marca=marca::all()->first();
            return redirect()->route('gestao.marca',
            [
                'marca'=>$marca->id
            ]);
        }
        return redirect()->route('login.admin');
    }
    public function marca_edit(marca $marca,Request $request)
    {
        //
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            $marca->nome_marca=$request->marca;
            $marca->save();
            $marca=marca::all()->first();
            return redirect()->route('gestao.marca',
            [
                'marca'=>$marca->id
            ]);
        }
        return redirect()->route('login.admin');
    }
    public function modelo($modelo)
    {
        //
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            if(empty(modelo::where('id',$modelo)->first()))
                $model=modelo::all()->first();
            else
                $model=modelo::where('id',$modelo)->first();
            $modelos=modelo::all();
            $marcas=marca::all();
            return view('wilsardcar.modelo',[
                'modelo' => $modelo,
                'model'=>$model,
                'modelos'=>$modelos,
                'marcas'=>$marcas
            ]);
        }
        return redirect()->route('login.admin');
    }
    public function modelo_store(Request $request)
    {
        //
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            $modelo= new modelo();
            $modelo->nome_modelo=$request->modelo;
            $modelo->id_marca=$request->marca;
            $modelo->save();
            $modelo=modelo::all()->first();
            return redirect()->route('gestao.modelo',
            [
                'modelo'=>$modelo->id
            ]);
        }
        return redirect()->route('login.admin');
    }
    public function modelo_edit(modelo $modelo,Request $request)
    {
        //
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            $modelo->nome_modelo=$request->modelo;
            $modelo->id_marca=$request->marca;
            $modelo->save();
            $modelo=modelo::all()->first();
            return redirect()->route('gestao.modelo',
            [
                'modelo'=>$modelo->id
            ]);
        }
        return redirect()->route('login.admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
      public function gestao_user(){
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            $carro=carro::all();
            $usuario=usuario::all();
            $modelo=modelo::all();
            $interesse=interesse::all();
            return view('wilsardcar.gestor1',[
                'carros' => $carro,
                'usuario'=> $usuario,
                'interesse'=>$interesse,
                'modelo'=>$modelo
            ]);
        }
        return redirect()->route('login.admin');
    }
    public function store(Request $request)
    {
        if(Auth::check()==true && Auth::user()->id_tipo==2){

            $carro= new carro();
            
            if( !empty($request->descricao) && !empty($request->descricao) && !empty($request->preco) && !empty($request->modelo) && !empty($request->bairro)){
            $carro->imagem = $request->file('arquivo')->store('principais');
                $carro->descricao=$request->descricao;
                $carro->cor=$request->cor;
                $carro->tipo=$request->tipo;
                $carro->matricula=$request->matricula;
                $carro->preco=$request->preco;
                $carro->id_modelo=$request->modelo;
                $carro->localizacao=$request->bairro;
                $carro->save();
                if(count($request->allFiles()['arquivos'])<=4)
                    $quantidade=count($request->allFiles()['arquivos']);
                else    
                    $quantidade=4;
                for($i=0; $i<$quantidade;$i++){
                    $imagenscarro= new imagem_carro();
                    $file = $request->allFiles()['arquivos'][$i];
                    $imagenscarro->imagem=$file->store('imagens');
                    $imagenscarro->id_carro=$carro->id;
                    $imagenscarro->save();
                    unset($imagenscarro);
                
                }

            }
            return redirect()->route('gestao');
        }
        return redirect()->route('login.admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(carro $carro,Request $request)
    {
        if(Auth::check()==true && Auth::user()->id_tipo==2){

            if(!empty($request->file('arquivo'))){
                Storage::delete($carro->imagem);
                $carro->imagem = $request->file('arquivo')->store('principais');
            }
                $carro->descricao=$request->descricao;
                $carro->cor=$request->cor;
                $carro->tipo=$request->tipo;
                $carro->matricula=$request->matricula;
                $carro->preco=$request->preco;
                $carro->id_modelo=$request->modelo;
                $carro->localizacao=$request->bairro;
                $carro->save();
                if(!empty($request->allFiles()['arquivos'])){
                $imagenscarro=imagem_carro::where('id_carro',$carro->id)->get();
                foreach ($imagenscarro as $imagem) {
                    //return Storage::download(public_path("storage/".$name->local));
                    //dd(public_path("storage/".$name->local));
                    Storage::delete($imagem->local);
                    unset($file);
                    $imagem->delete();
                }
                if(count($request->allFiles()['arquivos'])<=4)
                    $quantidade=count($request->allFiles()['arquivos']);
                else    
                    $quantidade=4;
                for($i=0; $i<$quantidade;$i++){
                    $imagenscarro= new imagem_carro();
                    $file = $request->allFiles()['arquivos'][$i];
                    $imagenscarro->imagem=$file->store('imagens');
                    $imagenscarro->id_carro=$carro->id;
                    $imagenscarro->save();
                    unset($imagenscarro);
            }
            }
            return redirect()->route('gestao',0);
        }
        return redirect()->route('login.admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(carro $carro)
    {
        //
        if(Auth::check()==true && Auth::user()->id_tipo==2){
            $carro->delete();
            return redirect()->route('gestao',0);
        }
        return redirect()->route('login.admin');
    }
}
