<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ImageResizer;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "category" => "required|string",
            "price" => "required|integer",

            "preview_img" => "required|image|mimes:jpeg,png,jpg",
            "custstar" => "required|string",
        ]);


        if ($request->hasFile("preview_img")) {
            $preview_img_file = $request->file("preview_img");
            $preview_img_image =  ImageResizer::resizeImage($preview_img_file, 300);
            $preview_img_name =  Str::slug($request->title) . "_" . time() . "_" . $preview_img_file->getClientOriginalName();
            $destinationPath = public_path('products/');
            $preview_img_image->save($destinationPath . $preview_img_name);
        }

            // Fetch category ID
    $categories = Category::where('stype_name', $request->categories)->first();
    $category_id = $categories ? $categories->id : null;

        $product = new Product();

        $product->name = $request->name;
        $product->category_id = $category_id; // Assign category ID
        $product->price = $request->price;
        $product->preview_img = $preview_img_name;

        $product->custstar = $request->custstar;
        // $product->rating = $request->rating;
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('admin.product.edit', compact('product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            "name" => "required|string",

        ]);
        $product = Product::findOrFail($id);

        if ($request->hasFile("preview_img")) {
            $preview_img_file = $request->file("preview_img");
            $preview_img_image =  ImageResizer::resizeImage($preview_img_file, 300);
            $preview_img_name =  Str::slug($request->title) . "_" . time() . "_" . $preview_img_file->getClientOriginalName();
            $destinationPath = public_path('products/');
            $preview_img_image->save($destinationPath . $preview_img_name);
            // delete old image
            if (File::exists("products/" . $product->preview_img)) {
                File::delete("products/" . $product->preview_img);
            }
        }
        $product->name = $request->name;
        $product->category = $request->category;

        $product->price = $request->price;
        if ($request->hasFile("preview_img")) {
            $product->preview_img = $preview_img_name;
        }
        //  $product->rating = $request->rating;
        $product->custstar = $request->custstar;
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if (File::exists("products/" . $product->preview_img)) {
            File::delete("products/" . $product->preview_img);
        }
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }

    public function create_image($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('admin.product.image.create', compact('product'));
    }
    public function store_image($product_id, Request $request)
    {
        $request->validate([
            "product_image" => "required|image|mimes:jpeg,png,jpg|max:1920",
            "image_alt" => "nullable|string",
        ]);
        $product = Product::findOrFail($product_id);
        if ($request->hasFile("product_image")) {
            $image_file = $request->file("product_image");
            $image_image =  ImageResizer::resizeImage($image_file, 300);
            $image_name = Str::slug($product->title) . "_" . time() . "_" . $image_file->getClientOriginalName();
            $destinationPath = public_path('products/');
            $image_image->save($destinationPath . $image_name);
            $product->images()->create([
                "product_id" => $product->id,
                "image" => $image_name,
                "alt" => $request->image_alt,
            ]);
        }
        return redirect()->route('admin.product.show', $product->id)->with('success', 'Product image created successfully.');
    }
    public function destroy_image($product_id, $image_id)
    {
        $product = Product::findOrFail($product_id);
        $image = $product->images()->findOrFail($image_id);
        if (File::exists("products/" . $image->image)) {
            File::delete("products/" . $image->image);
        }
        $image->delete();
        return back()->with('success', 'Product image deleted successfully.');
    }
}
