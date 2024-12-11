@extends('layout.layout')

@section('title', 'About Us')

@section('content')
    <section
        style="width: 100%; min-height: 100vh; display: flex; flex-direction: column; gap: 1.75rem; justify-content: top; align-items: center; text-align: center; padding: 7rem 1rem;">

        <h1 style="font-size: 2.5rem; font-weight: bold; color: #333;">About Us</h1>
        <p style="max-width: 800px; font-size: 1.2rem; color: #555; line-height: 1.75;">
            Welcome to our blog! We are passionate about sharing knowledge, stories, and insights on a variety of topics.
            Our goal is to inspire, inform, and entertain readers around the world. Whether you're looking for tips,
            tutorials, or thought-provoking articles, you've come to the right place.
        </p>

        <img src="/blog.jpg" alt="About Us" style="max-width: 90%; height: auto; border-radius: 10px;">

        <p style="max-width: 800px; font-size: 1.2rem; color: #555; line-height: 1.75;">
            Our team of writers and contributors is committed to creating high-quality content that resonates with our
            readers.
            Thank you for visiting our blog and being part of our journey. Feel free to explore and connect with us on
            social media!
        </p>
    </section>
@endsection
