@extends('layouts.app')

@section('header')
    <nav class="menu">
        Future navigation
    </nav>
@endsection

@section('content')
    <h1>All Posts</h1>

    @if(count($posts) > 0)
        <ul>
            @foreach ($posts as $post)
                <h2>{{ $post['title'] }}</h2>
                <p>{{ $post["content"] }}</p>
            @endforeach
        </ul>
    @else
        <p>No posts available.</p>
    @endif
@endsection
