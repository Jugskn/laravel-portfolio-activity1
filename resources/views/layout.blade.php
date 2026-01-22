<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', 'My Portfolio')</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f4f4f4;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* NAVIGATION */
nav {
    background: #333;
    padding: 1rem 2rem;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
}

nav a {
    color: white;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

nav a:hover {
    color: #3498db;
}

/* MAIN CONTENT */
.container {
    max-width: 1100px;
    width: 90%;
    margin: 2rem auto;
    padding: 2rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    flex: 1;
}

h1 {
    margin-bottom: 1rem;
    color: #333;
}

/* HOME */
.home {
    text-align: center;
    padding: 3rem 1rem;
}

.home h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.home .intro {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 1rem;
}

.home .subtext {
    color: #777;
    margin-bottom: 2rem;
}

.btn {
    display: inline-block;
    padding: 0.8rem 2rem;
    background: #3498db;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s ease;
}

.btn:hover {
    background: #217dbb;
}

/* ABOUT */
.about {
    max-width: 800px;
    margin: auto;
}

.about h1 {
    text-align: center;
    margin-bottom: 2rem;
}

.about-card {
    background: #fafafa;
    padding: 2rem;
    border-radius: 8px;
    border-left: 5px solid #3498db;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.about-card h2 {
    color: #3498db;
    margin-bottom: 1rem;
}

.about-card p {
    font-size: 1.05rem;
    margin-bottom: 0.7rem;
    color: #444;
}

.about-card .description {
    margin-top: 1.5rem;
    line-height: 1.8;
    color: #555;
}

/* PROJECTS */
.projects h1 {
    text-align: center;
    margin-bottom: 2rem;
}

.project-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.project-card {
    background: #ecf0f1;
    padding: 1.5rem;
    border-radius: 8px;
    transition: 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.project-card:hover {
    transform: translateY(-5px);
}

.project-card h3 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.project-card p {
    color: #555;
    line-height: 1.6;
}

/* CONTACT */
.contact {
    max-width: 700px;
    margin: auto;
}

.contact h1 {
    text-align: center;
    margin-bottom: 1.5rem;
}

.contact-text {
    text-align: center;
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 2rem;
}

.contact-card {
    background: #e8f4f8;
    padding: 2rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.contact-card p {
    font-size: 1.1rem;
    margin-bottom: 1rem;
}

.contact-card a {
    color: #3498db;
    text-decoration: none;
    font-weight: 600;
}

.contact-card a:hover {
    text-decoration: underline;
}

.profile-img {
    width: 140px;          /* size of the circle */
    height: 140px;
    object-fit: cover;
    border-radius: 50%;    /* makes it circular */
    border: 2px solid #3498db;
    display: block;
    margin-bottom: 1rem;   /* space below the photo */
}

/* FOOTER */
footer {
    text-align: center;
    padding: 1.5rem;
    background: #333;
    color: white;
}
</style>
</head>

<body>

<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
</footer>

</body>
</html>
