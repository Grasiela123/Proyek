<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function layout(){
    //     return view('layout', [
    //         'title' => "Home"
    //     ]);
    // }

    public function home()
    {
        return view('home', [
            'title' => "Home"
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'title' => "My Profile"
        ]);
    }

    public function aboutus()
    {
        return view('aboutus', ['title' => 'About us']);
    }

    public function __construct()
    {
        $categories = category::all();
        View::share('categories', $categories);
    }
    public function profilech()
    {
        return view('passchange');
    }
}
