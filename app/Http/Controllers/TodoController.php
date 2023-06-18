<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todos::all();
        return view('todos.index', [
            'todos' => $todos
        ]);
    }
    public function create(){
        return view('todos.create');
    } 
    public function store(TodoRequest $request){
        Todos::create([
            'title' => $request->title,
            'description'=> $request->description,
            'completed'=>0
        ]);

        $request->session()->flash('alert-success', 'Todo Created Successfully');
        return redirect()->route('todos.index');

    }

    public function show($id){
    $todo = Todos::find($id);

    if (!$todo) {
        return redirect()->route('todos.index')->withErrors([
            'error' => 'Unable to locate the Todo'
        ]);
    }

    return view('todos.show', ['todo' => $todo]);
}

    
}