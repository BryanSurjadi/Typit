@extends('layout.layout')

@section('title', 'Profile Page')

@section('content')
    <section
        style="width: 100%; min-height: 100vh; display: flex; flex-direction: column; gap: 1.75rem; justify-content: top; align-items: center; text-align: center; padding-top: 7rem; padding-bottom: 7rem">
        <div style="width: 90vw; max-width: 1000px; background-color: white; height: fit-content; display: flex; flex-direction: column; justify-content: start; align-items: start; padding: 1.5rem; gap: 1rem;"
            class="shadow-sm">
            <div
                style="display: flex; text-decoration: none; color: black; justify-content: start; align-items: center; width: 100%;">
                <div style="background-color: #FAFBFF; border-radius: 100%; padding: 0.85rem 1.2rem; cursor: pointer; font-weight: 500; height: fit-content"
                    class="border">
                    :P
                </div>
                <div
                    style="display: flex; flex-direction: column; justify-content: start; align-items: start; margin-left: 0.5rem">
                    <span style="font-size: 1.5rem; line-height: 2rem; font-weight: 700">{{ $user->name }}</span>
                    <span style="font-size: 0.75rem; line-height: 1rem; color: #6b7280">Register Since:
                        {{ $user->created_at->format('d F Y') }}</span>
                </div>
                <div style="margin-left: auto; text-align: right;">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary"
                            style="font-size: 0.875rem; line-height: 1.25rem;">Logout</button>
                    </form>
                </div>
            </div>
            <h3 style="margin-top: 1rem;">Your Latest Blog !</h3>

            @foreach ($blogs as $blog)
                <div style="text-align: left; position: relative; width: 100%; padding-top: 1.25rem;">

                    <a href="/blog/edit/{{ $blog->id }}"
                        style="position: absolute; right: 3rem; top: 1px; cursor:pointer; border: none; background: transparent; padding:0; margin: 0; color: gray">
                        <i class="fa-solid fa-pencil"></i>
                    </a>

                    <form action="/blog/{{ $blog->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this blog')" type="submit"
                            style="position: absolute; right: 1rem; top: 1px; cursor:pointer;  border: none; background: transparent; padding:0; margin: 0">
                            <i class="fa-solid fa-trash" style="color: red"></i>
                        </button>
                    </form>
                    <h5>{{ $blog->title }}</h5>
                    <p>{{ $blog->description }}</p>
                    </p>
                </div>
                <div style="height: 0.5px; background-color: #6b728081; width:100%; margin: 0; padding: 0"></div>
            @endforeach
        </div>
    </section>

@endsection
