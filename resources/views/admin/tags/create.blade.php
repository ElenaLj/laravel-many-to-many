@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>New Tag</h4>
                </div>

                <div class="card-body">
                    <form action="{{route("tags.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Insert new tag name here" value="{{old('name')}}">
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                    <div class="mt-3">
                        <a href="{{route("posts.index")}}">
                            <button type="button" class="btn btn-dark">Go back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection