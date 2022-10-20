<?php

namespace App\Http\Controllers;

use App\Http\Requests\TareaRequest;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        // $tareas = Tarea::orderByDesc('id')->get();
        // $params = [ 'tareas' => $tareas ];
        // return view('tarea.index', $params);
        return view('tarea.index');
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        return view('tarea.create');
    }

    /* Store a newly created resource in storage. */
    public function store(TareaRequest $request)
    {
        // dd( $request );
        $datos = $request->validated(); // TareaRequest
        // dd( $datos );
        $tarea = Tarea::create( $datos );
        return redirect()->route('tarea.index');
    }

    /* Display the specified resource. */
    public function show(Tarea $tarea)
    {
        return view('tarea.show', ['tarea'=>$tarea]);
    }

    /* Show the form for editing the specified resource. */
    public function edit(Tarea $tarea)
    {
        return view('tarea.edit', compact('tarea'));
    }

    /* Update the specified resource in storage. */
    public function update(TareaRequest $request, Tarea $tarea)
    {
        $datos = $request->validated(); // TareaRequest
        $tarea->update( $datos );
        return redirect()->route('tarea.index');
    }

    /* Remove the specified resource from storage. */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}
