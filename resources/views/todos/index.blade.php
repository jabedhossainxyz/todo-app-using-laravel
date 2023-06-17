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
                                        <table class="table">
                                                <thead>
                                                        <tr>
                                                                <th scope="col">Title</th>
                                                                <th scope="col">Description</th>
                                                                <th scope="col">Completed</th>
                                                                <th scope="col">Actions</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection