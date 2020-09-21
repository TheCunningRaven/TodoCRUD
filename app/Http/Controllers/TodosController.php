<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        //fetch all todos from database
        //display them in index page
        return view('todos.index')->with('todos',Todo::all()); //here we assign the variable at the same time we fetch it from the db
    }
    public function show($todoId)
    {
        return view('todos.show')->with('todo',Todo::find($todoId)); //here we assign the variable at the same time we fetch it from the db
    }
    public function create($todoId)
    {
        return view('todos.create');
    }
}
