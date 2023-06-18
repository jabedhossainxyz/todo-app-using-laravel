@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-header">{{ __('Dashboard') }}</div>

                                <div class="card-body">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                        </div>
                                        @endif
                                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-info">Go Back</a> <br>

                                        <b>Your Todo title: </b>{{$todo->title}} <br>
                                        <b>Your Todo description: </b>{{$todo->description}}
                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection