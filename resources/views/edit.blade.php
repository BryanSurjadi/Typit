@extends('layout.layout')

@section('title', 'Edit Blog Page')

@section('content')
    <section style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100vh; padding: 0 1rem;">
        <div style="width: 100%; max-width: 1000px; margin: auto; background-color: white; padding: 2rem; border-radius: 8px;" class="shadow-sm">
            <h3>Edit Blog</h3>

            <form action="/blog/{{ $blog->id }}" method="POST">
                @csrf
                @method('PUT')

                <div style="margin-bottom: 1.5rem;">
                    <label for="title" style="display: block; font-weight: 600;">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" required
                        style="width: 100%; padding: 0.8rem; border-radius: 4px; border: 1px solid #ccc;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="description" style="display: block; font-weight: 600;">Description</label>
                    <textarea name="description" id="description" rows="4" required
                        style="width: 100%; padding: 0.8rem; border-radius: 4px; border: 1px solid #ccc;">{{ old('description', $blog->description) }}</textarea>
                </div>

                <button type="submit"
                    style="padding: 0.8rem 1.5rem; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
                    Update Blog
                </button>
            </form>
        </div>
    </section>
@endsection
