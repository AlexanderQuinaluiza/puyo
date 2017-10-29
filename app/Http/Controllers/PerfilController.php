<?php

namespace sisAdminPuyo\Http\Controllers;

use Illuminate\Http\Request;

use sisAdminPuyo\Http\Requests;
use sisAdminPuyo\Perfil;
use Illuminate\Support\Facades\Redirect;
use sisAdminPuyo\Http\Requests\PerfilFormRequest;
use DB;

class PerfilController extends Controller
{
    //
    public function __construct(){

    }

    public function index(Request $request){
    
    if ($request) {
    	// determina el objeto de busqueda
         $query= trim($request->get('searchText'));
         $perfiles= DB::table('PERFIL')->where ('nombre','like','%'.$query.'%')
         ->orderBy('nombre','desc')
         ->paginate(5);
         return view('admin.perfil.index',["perfiles"=>$perfiles,"searchText"=>$query]);
    }


    }

    public function create(){
    	return view("admin.perfil.create");
    }

    public function store(PerfilFormRequest $request){

    	$perfiles= new Perfil;
    	$perfiles->nombre=$request->get('nombre');
    	$perfiles->save();

    	return Redirect::to('admin/perfil');
     

    }

    public function show($id){
 
 return view("admin.perfil.show",["perfiles"=>Perfil::findOrFail($id)]);
    }


    public function edit($id){

    	return view("admin.perfil.edit",["perfiles"=>Perfil::findOrFail($id)]);
  
    }

public function update(PerfilFormRequest $request,$id){

$perfiles= Perfil::findOrFail($id);
$perfiles->nombre=$request->get('nombre');

$perfiles->update();

return Redirect::to('admin/perfil');
}

public function destroy($id){

$perfiles=Perfil::findOrFail($id);
$perfiles->update();

return Redirect::to('admin/perfil');



} 


}
