<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
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
        return to_route('todos.index');
    }
}
