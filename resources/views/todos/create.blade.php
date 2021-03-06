@extends('layouts.app')
@extends('layouts.navigation')
@section('content')
    <div class="col-md-8">
        <div class="card card-default my-5">
            <div class="card-header">
                Create a new Todo
            </div>
            @if ($errors->any())
{{--                this errors key is provided by Laravel to all views--}}
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="/store-todo" method="POST">
                    @csrf
{{--                    The csrf directive allows laravel to do server side authentication--}}
                    <div class="form-group">
                        <input name="name" class="form-control" type="text" placeholder="name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" type="text" placeholder="description" cols="50" rows="5"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
