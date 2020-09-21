@extends('layouts.app')
@extends('layouts.navigation')
@section('title')
    Todo List
@endsection
@section('content')
            <h1 class="text-center my-5">TODOs</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Todo List
                        </div>
                        <div class="card-header">
                            <ul class="list-group">
                                @foreach($todos as $todo)
                                    <li class="list-group-item">
                                        {{$todo->name}}{{-- //fetching the name property of the todo --}}
                                        <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@endsection
