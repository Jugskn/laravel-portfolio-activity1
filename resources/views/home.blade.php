@extends('layout')

@section('title', 'Home - My Portfolio')

@section('content')

<div class="home">
    <h1>Welcome to My Portfolio</h1>

    <p class="intro">
        Hello! I'm a web developer passionate about creating amazing applications.
    </p>

    <p class="subtext">
        Explore my website to learn more about me, see my projects, and get in touch!
    </p>

    <a href="{{ route('projects') }}" class="btn">
        View My Projects
    </a>
</div>

@endsection
