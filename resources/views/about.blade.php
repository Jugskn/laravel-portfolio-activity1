@extends('layout')

@section('title', 'About Me')

@section('content')

<div class="about">
    <h1>About Me</h1>

    <div class="about-card">
        <!-- PROFILE PHOTO -->
        <img
            src="{{ asset('images/profile.jpg') }}"
            alt="Profile Photo"
            class="profile-img"
        >

        <h2>{{ $name }}</h2>

        <p>
            <strong>Course:</strong> {{ $course }}
        </p>

        <p>
            <strong>University:</strong> {{ $university }}
        </p>

        <p class="description">
            I am a passionate student learning web development with Laravel.
            I enjoy building web applications and solving problems through code.
            My goal is to become a full-stack developer and create impactful
            digital solutions.
        </p>
    </div>
</div>

@endsection
