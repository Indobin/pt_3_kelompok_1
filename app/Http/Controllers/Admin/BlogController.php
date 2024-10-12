<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function indexAdmin()
    {
        $blog = Blog::all();
        return view('admin.blog.index', compact('blog'));
    }

    // Admin: Membuat postingan baru
    public function create()
    {
        return view('admin.blog.form',[
            'blog' => new Blog(),
            'page_meta' => [
                'url' => route('admin.blog.store'),
                'title' => 'Tambah Data',
                'desctiption' => 'lorem Ipsum',
                'submit_text' => 'Kirim',
                'method' => 'post',
            ]
        ]);
    }

    // Admin: Menyimpan postingan baru
    public function store(BlogRequest $request)
    {

        Blog::create([
            'title' => $request->title,
           'content' => $request->content,
            'author_id' => Auth::id(),
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully!');
    }

    // Admin: Mengedit postingan
    public function edit(Blog $post)
    {
        return view('admin.blog.edit', compact('post'));
    }

    // Admin: Update postingan
    public function update(Request $request, Blog $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published',
        ]);

        $post->update($validatedData);
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully!');
    }

    // Admin: Hapus postingan
    public function destroy(Blog $post)
    {
        $post->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully!');
    }

    // User: Menampilkan semua postingan yang dipublish
    public function indexUser()
    {
        $blog = Blog::where('status', 'published')->latest()->get();
        return view('user.blog.index', compact('blog'));
    }

    // User: Menampilkan detail postingan
    public function show(Blog $post)
    {
        return view('user.blog.show', compact('post'));
    }
}
