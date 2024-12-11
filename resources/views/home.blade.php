@extends('layout.layout')

@section('title', 'Home Page')

@section('content')
    <div style="width: 100%; display: flex; justify-content: center; align-items: start; gap: 2rem; position: relative"
        class="home"> 
        <nav style="background-color: white; height: fit-content;" class="shadow-sm sidenav">
            <ul class=""
                style="list-style: none; padding: 1rem; margin: 0; display: flex; flex-direction: column; justify-content: start; align-items: start; gap: 0.5rem;">
                <a href="/profile" style="text-decoration: none; color: black">
                    <li class="" style="cursor: pointer"><i class="fa-solid fa-blog"
                            style="width: 1rem; height: 1rem; margin-right: 1rem"></i> Your
                        Blogs</li>

                </a>
                <a href="/profile" style="text-decoration: none; color: black">
                    <li class="" style="cursor: pointer"><i class="fa-solid fa-user"
                            style="width: 1rem; height: 1rem; margin-right: 1rem"></i>
                        Profile</li>
                </a>
                <a href="/about" style="text-decoration: none; color: black">
                    <li class="" style="cursor: pointer"><i class="fa-solid fa-circle-info"
                            style="width: 1rem; height: 1rem; margin-right: 1rem"></i> About Us</li>
                </a>
                <a href="/profile" style="text-decoration: none; color: black">
                <li class="" style="cursor: pointer"><i class="fa-solid fa-list"
                        style="width: 1rem; height: 1rem; margin-right: 1rem"></i>
                    Categories</li>
                </a>
                
            </ul>
            <div style="height: 0.5px; background-color: #6b728081; width:100%; margin: 0; padding: 0"></div>
            <ul class=""
                style="list-style: none; padding: 1rem; margin: 0; display: flex; flex-direction: column; justify-content: start; align-items: start; gap: 0.5rem;">
                <li class="" style="color: black; font-weight: 600">Popular Categories</li>
                <li class=""
                    style="color: black; display: flex; justify-content: space-between; align-content: center; width: 100%">
                    <span>Javascript</span>
                    <span
                        style="background-color: #F3F4F6; border-radius: 5px; color: #6B7280; font-size: 0.75rem; line-height: 1rem; padding: 0.2rem 0.5rem; text-align: center; height: fit-content">+99</span>
                </li>
                <li class=""
                    style="color: black; display: flex; justify-content: space-between; align-content: center; width: 100%">
                    <span>PHP</span>
                    <span
                        style="background-color: #F3F4F6; border-radius: 5px; color: #6B7280; font-size: 0.75rem; line-height: 1rem; padding: 0.2rem 0.5rem; text-align: center; height: fit-content">+99</span>
                </li>
                <li class=""
                    style="color: black; display: flex; justify-content: space-between; align-content: center; width: 100%">
                    <span>Web Development</span>
                    <span
                        style="background-color: #F3F4F6; border-radius: 5px; color: #6B7280; font-size: 0.75rem; line-height: 1rem; padding: 0.2rem 0.5rem; text-align: center; height: fit-content">+99</span>
                </li>
                <li class=""
                    style="color: black; display: flex; justify-content: space-between; align-content: center; width: 100%">
                    <span>React</span>
                    <span
                        style="background-color: #F3F4F6; border-radius: 5px; color: #6B7280; font-size: 0.75rem; line-height: 1rem; padding: 0.2rem 0.5rem; text-align: center; height: fit-content">+99</span>
                </li>
            </ul>
        </nav>

        <section
            style="width: 100%; min-height: 100vh; display: flex; flex-direction: column; gap: 1.75rem; justify-content: top; align-items: center; text-align: center;">
            <div style="width: 100%; max-width: max(90vw, 1000px); background-color: white; height: fit-content; display: flex; flex-direction: column; justify-content: start; align-items: start; padding: 1.5rem; gap: 1rem;"
                class="shadow-sm">
                <div
                    style="display: flex; text-decoration: none; color: black; justify-content: start; align-items: start; width: 100%">
                    <div style="background-color: #FAFBFF; border-radius: 100%; padding: 0.45rem 0.6rem; cursor: pointer; font-weight: 500; height: fit-content"
                        class="border">
                        AB
                    </div>
                    <form action="/blog" method="POST"
                        style="display: flex; flex-direction: column; justify-content: center; align-items: end; width: 100%; margin-left: 0.75rem; gap: 0.5rem">
                        @csrf
                        <input type="text" id="title" name="title"
                            style="width: 100%; border: 1px solid #d1d5db; border-radius: 5px; padding: 0.75rem"
                            placeholder="Blog Title . . . ">
                        <textarea id="description" name="description" rows="3"
                            style="width: 100%; border: 1px solid #d1d5db; border-radius: 5px; padding: 0.75rem"
                            placeholder="Write your blog . . . "></textarea>
                        <button type="submit" class="btn btn-primary" style="padding: 0.3rem 1.5rem">Post Blog</button>
                    </form>
                </div>
                @if ($errors->any())
                    <div style="text-align: left; width:100%">
                        @foreach ($errors->all() as $error)
                            <li style="color: #ef4444">{{ $error }}</li>
                        @endforeach
                    </div>
                @else
                    <div class="">
                        <p style="color: #22c55e">{{ session('success') }}</p>
                    </div>
                @endif
            </div>

            @foreach ($blogs as $blog)
                <div style="width: 100%; max-width: max(90vw, 1000px); background-color: white; height: fit-content; display: flex; flex-direction: column; justify-content: start; align-items: start; padding: 1.5rem; gap: 1rem;"
                    class="shadow-sm">
                    <a href="#"
                        style="display: flex; text-decoration: none; color: black; justify-content: center; align-items: center">
                        <div style="background-color: #FAFBFF; border-radius: 100%; padding: 0.45rem 0.6rem; cursor: pointer; font-weight: 500; height: fit-content"
                            class="border">
                            AB
                        </div>
                        <div
                            style="display: flex; flex-direction: column; justify-content: start; align-items: start; margin-left: 0.5rem">
                            <span
                                style="font-size: 1rem; line-height: 1.5rem; font-weight: 700">{{ $blog->user->name }}</span>
                            <span
                                style="font-size: 0.75rem; line-height: 1rem; color: #6b7280">{{ $blog->created_at->format('d F Y H:i') }}</span>
                        </div>
                    </a>
                    <div style="text-align: left; width: 100%">
                        <h3>{{ $blog->title }}</h3>
                        <p>{{ $blog->description }}
                        </p>
                        <div style="cursor: pointer; text-align: end; width: 100%">
                            <form action="/likes/{{ $blog->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" style="background-color: transparent; border: none">
                                    <i class="fa-regular fa-thumbs-up"></i> {{ $blog->likes }} Likes
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>

    <style>
        .home {
            padding: 7rem;
        }

        .sidenav {
            width: 20rem;
            /* position: sticky;
                top: 7rem; */
        }

        @media (max-width: 1024px) {
            .home {
                padding: 7rem 2rem;
            }
        }

        @media (max-width: 768px) {
            .home {
                flex-direction: column
            }

            .sidenav {
                width: 100%;
            }
        }
    </style>

@endsection
