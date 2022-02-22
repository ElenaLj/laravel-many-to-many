@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{$tag->name}}</h4>
                </div>
                
                <div class="card-body">
                    <form action="{{route("tags.update", $tag->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="name">Edit Tag Name</label>
                            <input name="name" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Insert new tag name here" value="{{old('name'), $tag->name}}">
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                
                    <div class="mt-3">
                        <a href="{{route("tags.index")}}">
                            <button type="button" class="btn btn-dark">Go back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection