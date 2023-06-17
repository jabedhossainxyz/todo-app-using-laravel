@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-header">{{ __('Dashboard') }}</div>

                                <div class="card-body">

                                        <form>
                                                <div class="mb-3">
                                                        <label class="form-label">Titie </label>
                                                        <input type="text" name="title" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Description </label>
                                                        <textarea name="description"></textarea>
                                                </div>
                                                <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>

                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection