<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function showDetail($id)
    {
        $donations = Donation::find($id);
        return view('donationdetail')->with(['donation' => $donations]);
    }
}
