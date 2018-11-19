<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Materia;
use App\Alumno;
use App\TipoMateria; 
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\MateriaFormRequest;
use DB;

class MateriaController extends Controller
{
    public function __construct(){

    }
    public function index()
    {
        $categorias = DB::table('materia')
            ->leftJoin('alumno', 'materia.idAlumno', '=', 'alumno.idAlumno')
            ->leftJoin('tipomateria', 'materia.idTipoMateria', '=', 'tipomateria.idTipoMateria')
            ->select('materia.*', 'alumno.nombre as nombrealumno', 'tipomateria.nombre as nombretipomateria')
            ->get();
            return view('materia.index', compact('categorias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipomaterias=TipoMateria::all();
        $alumnos=Alumno::all();

        $categorias = DB::table('materia')
            ->leftJoin('alumno', 'materia.idAlumno', '=', 'alumno.idAlumno')
            ->leftJoin('tipomateria', 'materia.idTipoMateria', '=', 'tipomateria.idTipoMateria')
            ->select('materia.*','alumno.*','tipomateria.*', 'alumno.nombre as nombrealumno', 'tipomateria.nombre as nombretipomateria')
            ->get();
            return view('materia.create', compact('categorias','tipomaterias','alumnos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$i = 1;
        //foreach ($request->get('category_id') as $key=>$value) {

          //  $product = new Pago;
            //$product->idAlumno =  $request->get("idAlumno");
            //$product->idcombo = $request->get('category_id');
            //$product->nit =  $request->get('nit');
            //$product->save();
            //$i++;
        //}
        $idtipomateria = $request->get('idTipoMateria');
        $idalumno = $request->get("idAlumno");

        $cont = 0;
        while($cont < count($idalumno)){
            $detalle = new Materia();
            $detalle->nombre=$request->get('nombre');
            $detalle->descripcion=$request->get('descripcion');
            $detalle->idAlumno = $idalumno[$cont];
            $detalle->idTipoMateria = $idtipomateria;
            $detalle->save();
            $cont=$cont+1;
        }



        return redirect()->route('materia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tmateria=Materia::findOrFail($id);
        return view('materia.show',compact('tmateria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tmateria=Materia::findOrFail($id);
        $tipomaterias=TipoMateria::all();
        $alumnos=Alumno::all();
        return view('materia.edit',compact('tmateria','tipomaterias','alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Materia::findOrFail($id)->update($request->all());
        return redirect()->route('materia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Materia::findOrFail($id)->delete();
        return redirect()->route('materia.index');
    }
}