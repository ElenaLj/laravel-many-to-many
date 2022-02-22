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
                    <p>Slug: {{$tag->slug}}</p>
                    <a href="{{route("tags.index")}}" class="mt-2">
                        <button type="button" class="btn btn-dark">Go back</button>
                    </a>
                </div>
                @if (count($tag->posts) > 0)
                <div class="card-body">
                    <h3>Tags linked posts</h3>
                    <ul>
                        {{-- @dd($category->posts); --}}
                        @foreach ($tag->posts as $post)
                            <li>{{$post->title}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection