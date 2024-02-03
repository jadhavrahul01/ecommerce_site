<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');
    }

    public function profile()
    {

        return view('admin.profile');
    }
}
