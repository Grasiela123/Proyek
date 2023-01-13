<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function apapun(Request $request)
    {
        $donations = Donation::simplePaginate(10);
        return view('home', [
            'donations' => $donations,
            'title' => "Home"
        ]);
    }
    public function home()
    {
        $donations = Donation::all();
        return view('home', ['donations' => $donations]);
    }
    public function detail($id)
    {
        $donations = Donation::find($id)->all();
        return view('detail', ['donation' => $donations]);
    }
}
