<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Alumno;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AlumnoFormRequest;
use DB;
class AlumnoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $alumnos=DB::table('alumno')->where('nombre', 'LIKE', '%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('idAlumno', 'desc')
            ->paginate(6);
            return view('alumno.index', ['alumnos'=>$alumnos, 'searchText'=>$query]);
        }
    }
    public function create(){
        return view('alumno.create');
    }
    public function store(AlumnoFormRequest $request){
        $alumnos=new Alumno();
        $alumnos->nombre=$request->get('nombre');
        $alumnos->telefono=$request->get('telefono');
        $alumnos->direccion=$request->get('direccion');
        $alumnos->correo=$request->get('correo');
        $alumnos->fecha=$request->get('fecha');
        $alumnos->condicion='1';
        $alumnos->save();
        return Redirect::to('alumno');
    }
    public function show($id){
        return view('alumno.show', ['alumno'=>Alumno::findOrFail($id)]);
    }
    public function edit($id){
        return view('alumno.edit', ['alumno'=>Alumno::findOrFail($id)]);
    }
    public function update(AlumnoFormRequest $request, $id){
        $alumnos=Alumno::findOrFail($id);
        $alumnos->nombre=$request->get('nombre');
        $alumnos->telefono=$request->get('telefono');
        $alumnos->direccion=$request->get('direccion');
        $alumnos->correo=$request->get('correo');
        $alumnos->fecha=$request->get('fecha');
        $alumnos->update();
        return Redirect::to('alumno'); 
    }
    public function destroy($id){
        $alumnos=Alumno::findOrFail($id);
        $alumnos->condicion='0';
        $alumnos->update();
        return Redirect::to('alumno'); 
    }
}
