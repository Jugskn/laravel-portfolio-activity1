@extends('layout')

@section('title', 'My Projects')

@section('content')

<div class="projects">
    <h1>My Projects</h1>

    <div class="project-grid">
        @foreach($projects as $project)
            <div class="project-card">
                <h3>{{ $project['title'] }}</h3>
                <p>{{ $project['description'] }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection
