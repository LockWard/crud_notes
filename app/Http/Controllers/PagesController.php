<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App;

use function GuzzleHttp\Promise\all;

class PagesController extends Controller
{
    public function inicio(){

        $notas = App\Nota::paginate(5);

        return view('welcome', compact('notas'));
    }

    public function detalle($id){

        $nota = App\Nota::findOrFail($id);

        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request)
    {
        //return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $nuevaNota = new App\Nota;
        $nuevaNota->nombre = $request->nombre;
        $nuevaNota->descripcion = $request->descripcion;

        $nuevaNota->save();

        return back()->with('mensaje', 'Nota agregada');
    }

    public function editar($id){

        $nota = App\Nota::findOrFail($id);

        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;

        $notaUpdate->save();

        return back()->with('mensaje', 'Nota actualizada');
    }

    public function eliminar($id){
        
        $notaEliminar = App\Nota::FindOrFail($id);
        $notaEliminar->delete();

        return back()->with('mensaje', 'Nota eliminada');
    }

    public function fotos(){
        return view('fotos');
    }

    public function noticias(){

        return view('blog');
    }

    public function nosotros($nombre = null){

        $equipo = ['Ignacio', 'Juanito', 'Pedrito'];
        //return view('nosotros', ['equipo'=>$equipo, 'nombre'=>$nombre]);
        return view('nosotros', compact('equipo', 'nombre'));
    }    
}
