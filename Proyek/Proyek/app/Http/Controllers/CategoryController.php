<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Donation;

class CategoryController extends Controller
{
    public function category($id)
    {
        $donations = Category::find($id)->load('donation');
        return view('category', ['category' => $donations]);
    }
    public function categoryTest($id)
    {
        $categories = Category::find($id);
        return view('category', ['categories' => $categories]);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/')->with('success', 'Category successfully deleted');
    }
}
