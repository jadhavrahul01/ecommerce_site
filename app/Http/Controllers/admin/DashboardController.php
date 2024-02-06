<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Testimonial;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        $testimonials = Testimonial::all();
        return view('admin.dashboard',compact('messages','testimonials'));
    }

    public function profile()
    {

        return view('admin.profile');
    }
}
