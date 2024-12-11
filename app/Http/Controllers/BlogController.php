<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    //
    public function about()
    {
        return view('about');
    }

    public function index(Request $req)
    {
        $blogs = Blog::with('user')
            ->where('title', 'LIKE', "%{$req->search}%")
            ->orderBy('likes', 'desc')
            ->get();
        return view('home', compact('blogs'));
    }


    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator);
        }

        Blog::create([
            'title' => $req->title,
            'description' => $req->description,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/')->with('success', 'Blog created successfully');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $validated['title'];
        $blog->description = $validated['description'];
        $blog->save();

        return redirect('/profile')->with('success', 'Blog updated successfully!');
    }


    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();

            return redirect('/profile')->with(['success' => 'Course deleted successfully', 'form' => 'delete']);
        } catch (Exception $e) {
            return redirect('/profile')->with(['error' => 'Course ID not found', 'form' => 'delete']);
        }
    }

    public function likes($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $blog->increment('likes');
        }
        return redirect()->back();
    }
}
