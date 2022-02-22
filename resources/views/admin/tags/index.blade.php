@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Tags</div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route("tags.create")}}">
                            <button type="button" class="btn btn-dark">Add Tag</button>
                        </a>
                    </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Actions</th>
                            <th scope="col">Actions</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->slug}}</td>

                                {{-- OPEN RECORD --}}
                                <td>
                                    <a href="{{route("tags.show", $tag->id)}}">
                                        <button type="button" class="btn btn-light">Show tag</button>
                                    </a>
                                </td>
                                {{-- EDIT RECORD --}}
                                <td>
                                    <a href="{{route("tags.edit", $tag->id)}}">
                                        <button type="button" class="btn btn-warning">Edit tag</button>
                                    </a>
                                </td>
                                {{-- DELETE RECORD --}}
                                <td>
                                    <form action="{{route("tags.destroy", $tag->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Delete tag</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection