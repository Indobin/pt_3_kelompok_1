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
            'blogs' => new Blog(),
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

        return redirect()->route('admin.blog.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Admin: Mengedit postingan
    public function edit(Blog $blogs)
    {
        return view('admin.blog.form', [
            'blogs' => $blogs,
            'page_meta' => [
                'url' => route('admin.blog.update', $blogs->id),
                'title' => 'Edit Data',
                'sub_title' => 'Edit Data',
                'description' => 'Blog details.',
                'submit_text' => 'Simpan',
                'method' => 'put', 
            ]
        ]);
    }

    // Admin: Update postingan
    public function update(BlogRequest $request, Blog $blogs)
    {
        $blogs->title = $request->title;
        $blogs->content = $request->content;
        $blogs->status = $request->status;
        $blogs->save();
        return redirect()->route('admin.blog.index')->with('success', 'Data berhasil diedit!');
    }

    // Admin: Hapus postingan
    public function destroy(Blog $blogs)
    {
        $blogs->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Data berhasil dihapus!');
    }

    // User: Menampilkan semua postingan yang dipublish
    public function indexUser()
    {
        $blogs = Blog::where('status', 'published')->latest()->get();
        return view('blog', compact('blogs'));
    }

    // User: Menampilkan detail postingan
    public function show(Blog $blogs)
    {
        return view('detailBlog', compact('blogs'));
    }
}
