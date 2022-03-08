<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

        //$cursos = Curso::all();
        $cursos = Curso::Orderby('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        //return $request->all();
        /*
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);*/
/*
        $curso = new Curso;

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
*/
        //return $curso;

        //return $request->all();

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id);

        
    }

    public function show(Curso $curso){

        //$curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    /*public function edit($id){

        $curso = Curso::find($id);

        return $curso;

    }*/

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));

    }

    public function update(StoreCurso $request, Curso $curso){
        //return $request->all();
        /*$curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        ->save();*/
        
        //return $curso;

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        
        $curso->delete();

        return redirect()->route('cursos.index');

    }
    
}
