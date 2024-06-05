<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function createBlog() {
    $categories = BlogCategory::all()->pluck('name', 'id');

    // Check if a valid category ID is selected
    if (request()->has('blog_category_id')) {
        $categoryId = request()->input('blog_category_id');
        if (!BlogCategory::find($categoryId)) {
            return redirect()->back()->withErrors(['blog_category_id' => 'Invalid category selected.']);
        }
    }

    return view('admin.dasboard.blog.create', compact('categories'));
    }
}
