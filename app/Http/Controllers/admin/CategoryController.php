<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\ImageResizer;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function indexcategory()
    {
        $categories = Category::all();
        return view('admin.product.indexcategory', compact('categories'));
    }
    public function addcategory()
    {
        $categories = Category::all();
        return view('admin.product.addcategory', compact('categories'));
    }
    public function storecategory(Request $request)
    {
        $request->validate([
        ]);

        $category = new Category();
        $category->stype_name = $request->stype_name;
       // $product->rating = $request->rating;
        $category->save();

        return redirect()->route('admin.product.create')->with('success', 'Category created successfully.');
    }
    public function destroys($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return back()->with('success', 'Deleted Successfully');
    }

}
