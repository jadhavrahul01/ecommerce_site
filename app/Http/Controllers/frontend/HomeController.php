<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Product;
use App\Models\Category;
use App\Models\Message;
use App\Mail\FormSubmitMail;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    private function __getQuery($request)
    {
        // $keyword = $request->has('keyword') ? $request->keyword : null;

        $selected_category = $request->has('category') ? $request->category : null;
        $query = Product::with(['category']);

        if ($selected_category) {
            $query = $query->whereCategoryId($selected_category);
        }

        // if (is_array($selected_category) && count($selected_category) > 0) {
        //     $query = $query->whereHas('category', function ($query) use ($selected_category) {
        //         $query->whereIn('category.stype_name', $selected_category);
        //     });
        // }

        return $query;
    }


    public function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('frontend.home', compact('testimonials'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    protected function contact_store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "message" => "required",
        ]);

        $form = new Message([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
        ]);

        $form->save();
        Mail::to(config('app.mail_to_address'))->send(new FormSubmitMail($form, 'Contact'));
        return back()->with('success', 'Form submitted successfully');
    }

    public function product()
    {
        $categories = Category::all();

        $products = Product::latest()->paginate(8);
        return view('frontend.product', compact('products', 'categories'));
    }

    public function search(Request $request)
    {
        // $categories = Category::all();
        // $search = $request->input('search');
        // $products = Product::latest()->paginate(8);
        // $products = Product::query()
        //     ->where('name', 'LIKE', "%{$search}%")
        //     ->orWhere('category', 'LIKE', "%{$search}%")
        //     ->paginate(8);
        // return view('frontend.product', compact('products', 'categories','selected_category','keyword'));

        $selected_category = $request->has('category') ? $request->category : null;

        $query = $this->__getQuery($request);
        $products = $query->paginate(10);
        $categories = Category::pluck('stype_name', 'id')->toArray();
        return view(
            'frontend.product',
            compact(
                [
                    'products',
                    'categories',
                    'selected_category',
                ]
            )
        );
    }
}
