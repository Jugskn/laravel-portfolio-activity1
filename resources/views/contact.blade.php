@extends('layout')

@section('title', 'Contact Me')

@section('content')

<div class="contact">
    <h1>Contact Me</h1>

    <p class="contact-text">
        Feel free to reach out to me through any of the following:
    </p>

    <div class="contact-card">
        <p>
            <strong>Email:</strong>
            <a href="mailto:{{ $email }}">{{ $email }}</a>
        </p>

        <p>
            <strong>Phone:</strong> {{ $phone }}
        </p>
    </div>
</div>

@endsection
