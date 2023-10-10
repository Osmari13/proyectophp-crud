<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibro;
use App\Http\Requests\UpdateLibro;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libro::orderBy('id','desc')->paginate();

        return view('libros.index', compact('libros'));
    }

    public function create(){
        return view('libros.create');
    }

    public function store(StoreLibro $request){

        
        $libro = new Libro();

        $libro->nombre = $request->nombre;
        $libro->categoria = $request->categoria;
        $libro->autor = $request->autor;
        $libro->descripcion = $request->descripcion;
        $libro->editorial = $request->editorial;

        $libro->save();

        return redirect()->route('libros.show', $libro);
       
    }
    public function show(Libro $libro){
        
        return view('libros.show', compact('libro')); // compact('libro') = ['libro' => $libro]
    }


    /* funcion(Libro $libro) = funcion($id){$libro = Libro::find($id);}*/

    public function edit(Libro $libro){
        
        return view('libros.edit', compact('libro')); // compact('libro') = ['libro' => $libro]
    }

    public function update(Libro $libro, UpdateLibro $request){

        $libro->nombre = $request->nombre;
        $libro->categoria = $request->categoria;
        $libro->autor = $request->autor;
        $libro->descripcion = $request->descripcion;
        $libro->editorial = $request->editorial;

        $libro->save();
        return redirect()->route('libros.show', $libro); // compact('libro') = ['libro' => $libro]
    }


    public function destroy(Libro $libro){
        $libro->delete();
        return redirect()->route('libros.index');
    }

}
