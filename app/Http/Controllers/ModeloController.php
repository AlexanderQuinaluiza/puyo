<?php

namespace sisAdminPuyo\Http\Controllers;

use Illuminate\Http\Request;

use sisAdminPuyo\Http\Requests;
use sisAdminPuyo\Modelo;
use Illuminate\Support\Facades\Redirect;
use sisAdminPuyo\Http\Requests\ModeloFormRequest;
use DB;

class ModeloController extends Controller
{
    //
    public function __construct(){

    } 

    public function index(Request $request){
      if ($request) {
      	
      	$query= trim($request->get('searchtext'));
      	$modulo=DB::table('MODULO')->where('NOMBRE','like','%'+$query+'%')
      	->orderBy('NOMBRE','asc')
      	->paginate(10);
      	return view ('admin.modelo.index',["modelos"=>$categorias,"searchtext"=>$query]);
      }

    }

    public function create(){
    	return create("admin.modelos.create");

    }

    public function store(ModeloFormRequest $request) {
      $modelo= new modelo;
      $modelo->m_nombre=$request->get('nombre');
      $modelo->m_descripcion=$request->get('descripcion');
      $modelo->save();
     return Redirect::to('admin/modelos');
    }
      public function show($id) {
    	return view("admin.modelos.show",["modelo"=>Modelo::findOrFail($id)]);
    }
      public function edit($id) {
      	return view("admin.modelos.edit",["modelo"=>Modelo::findOrFail($id)]);
    	
    }
      public function update(ModeloFormRequest $request, $id) {

      $modelo=Modelo::findOrFail($id);
      $modelo->nombre=$request->get('nombre');
      $modelo->descripcion=$request->get('descripcion');
      $modelo->update();
      return Redirect::to('admin/modelo');
    }
      public function destroy($id) {
    	$modelo=Modelo::findOrFail($id);
    	$modelo->descripcion='sin descripcion';
    	$modelo->update();
    	return redirect::to('admin/modelos');
    }
}
