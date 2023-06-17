<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
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
        $
    }
}
