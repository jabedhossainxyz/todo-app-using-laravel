@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-header">Todo App</div>

                                <div class="card-body">
                                        <h4>Edit Form</h4>

                                        <form>
                                                <div class="mb-3">
                                                        <label class="form-label">Titie </label>
                                                        <input type="text" name="title" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Description </label>
                                                        <textarea name="description" cols="5" rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                        </form>

                                </div>
                        </div>
                </div>
        </div>
</div>
@endsection