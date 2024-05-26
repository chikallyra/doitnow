<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateBlogRequest;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Generate unique slug based on title
        $slug = Str::slug($validatedData['title']);
    
        // Jika ada file gambar di-upload, simpan ke storage dan dapatkan path-nya
        if ($request->hasFile('image')) {
            Log::info('File image detected, attempting to store...');
            try {
                $imagePath = $request->file('image')->store('images/blogs', 'public');
                Log::info('Image stored at: ' . $imagePath);
            } catch (\Exception $e) {
                Log::error('Error storing image: ' . $e->getMessage());
                return redirect()->back()->withErrors(['image' => 'Failed to upload image. Please try again.']);
            }
        } else {
            $imagePath = null;
            Log::info('No image uploaded.');
        }
    
        $currentDate = Carbon::now()->toDateString();
        $currentTime = Carbon::now()->toTimeString();
    
        // Simpan data ke database
        $blog = new Blog();
        $blog->title = $validatedData['title'];
        $blog->slug = $slug;
        $blog->body = $validatedData['body'];
        $blog->excerpt = Str::limit(strip_tags($validatedData['body']), 200);
        $blog->image = $imagePath;
        $blog->created_date = $currentDate;
        $blog->created_time = $currentTime;
        $blog->save();
    
        // Redirect dengan pesan sukses
        return redirect('/admin/home')->with('success', 'Blog successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
