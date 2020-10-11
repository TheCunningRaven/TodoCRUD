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
    public function create()
    {
        return view('todos.create');
    }
    public function store()
    {
//        CREATE
        $this->validate(\request(),[
            'name'=> 'required |min:6|max:45',
            'description'=> 'required|max:250'
        ]);
        $data =\request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save(); // This static method persists data to the db

        return redirect('/todos');
    }
    public function edit($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todos.edit')->with('todo',$todo);
    }
    public function update($todoId)
    {
        $this->validate(\request(),[
            'name'=> 'required |min:6|max:45',
            'description'=> 'required|max:250'
        ]);
        $data =\request()->all();
        $todo = Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();
        return redirect('/todos');
    }
    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);
        $todo -> delete();
        return redirect('/todos');
    }
}
