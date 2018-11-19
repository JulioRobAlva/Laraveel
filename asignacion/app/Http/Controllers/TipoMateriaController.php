<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TipoMateria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TipoMateriaFormRequest;
use DB;
class TipoMateriaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $tipomateria=DB::table('tipomateria')->where('nombre', 'LIKE', '%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('idTipoMateria', 'desc')
            ->paginate(6);
            return view('tipomateria.index', ['tipomaterias'=>$tipomateria, 'searchText'=>$query]);
        }
    }
    public function create(){
        return view('tipomateria.create');
    }
    public function store(TipoMateriaFormRequest $request){
        $tipomateria=new TipoMateria();
        $tipomateria->nombre=$request->get('nombre');
        $tipomateria->descripcion=$request->get('descripcion');
        $tipomateria->condicion='1';
        $tipomateria->save();
        return Redirect::to('tipomateria');
    }
    public function show($id){
        return view('tipomateria.show', ['tipomateria'=>TipoMateria::findOrFail($id)]);
    }
    public function edit($id){
        return view('tipomateria.edit', ['tipomateria'=>TipoMateria::findOrFail($id)]);
    }
    public function update(TipoMateriaFormRequest $request, $id){
        $tipomateria=TipoMateria::findOrFail($id);
        $tipomateria->nombre=$request->get('nombre');
        $tipomateria->descripcion=$request->get('descripcion');
        $tipomateria->update();
        return Redirect::to('tipomateria'); 
    }
    public function destroy($id){
        $tipomateria=TipoMateria::findOrFail($id);
        $tipomateria->condicion='0';
        $tipomateria->update();
        return Redirect::to('tipomateria'); 
    }
}
