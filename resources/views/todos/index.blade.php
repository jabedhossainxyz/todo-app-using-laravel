@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-header">{{ __('Dashboard') }}</div>

                                <div class="card-body">

                                        @if (Session::has('alert-success'))
                                        <div class="alert alert-success" role="alert">
                                                {{Session::get('alert-success')}}
                                        </div>
                                        @endif

                                        @if (count($todos) >0)
                                        <table class="table">
                                                <thead>
                                                        <tr>
                                                                <th>Title</th>
                                                                <th>Description</th>
                                                                <th>Completed</th>
                                                                <th>Actions</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach ($todos as $todo)
                                                        <tr>
                                                                <td>{{$todo->title}}</td>
                                                                <td>{{$todo->description}}</td>
                                                                <!-- <td>{{substr(strip_tags($todo->description), 0,25)}}</td> -->
                                                                <td>{{$todo->completed == 1 ? '<a class="btn btn-sm btn-info" href="">View</a>'}}</td>
                                                                <td>
                                                                        <a href="">Edit</a>
                                                                        <a href="">View</a>
                                                                        <form action="">
                                                                                <input type="hidden" name="todo_id" value="{{ $todo->id}}"/>
                                                                                <input type="submit" class="btn btn-sm btn-info"/>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                </tbody>
                                        </table>
                                        @else
                                        <h4>No Todos are created yet</h4>
                                        @endif
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection