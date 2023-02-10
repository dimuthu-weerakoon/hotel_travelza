<?php

namespace App\Http\Controllers;
use App\Models\Hotel;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('hotel.index');
    }

    public function places()
    {
        return view('hotel.places');
    }

    public function gallery()
    {
        return view('about.gallery');
    }

    public function hotel()
    {
        return view('hotel.hotel_registration');

    }

    public function contact()
    {
        return view('contact');
    }

    public function travel()
    {
         $Hotel = hotel::all();
         return view('hotel.travel_places',['Hotel'=>$Hotel]);
    }

    // public function payment()
    // {
    //     return view('payment');
    // }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }
}
