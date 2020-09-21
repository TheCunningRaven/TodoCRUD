@extends('layouts.app')
@extends('layouts.navigation')
@section('title')
    Todo Detail
@endsection
@section('content')
        <h2 class="text-center my-5">
            {{$todo->name}}
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Article
                    </div>
                    <div class="card-body">
                        {{$todo->description}}
                    </div>
                </div>
            </div>
        </div>
@endsection
