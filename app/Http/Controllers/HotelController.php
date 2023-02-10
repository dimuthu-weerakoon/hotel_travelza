<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $hotels = Hotel::orderBy('created_at','desc');
        // return view('travel_places')->with('hotels',$hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'hotel_name' => 'required',
            'email' => 'required',
            'price' => 'required',
            'contact_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'about_your_hotel' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);


        $hotel = new Hotel();
        $hotel->hotel_name = $request->input('hotel_name');
        $hotel->email = $request->input('email');
        $hotel->price = $request->input('price');
        $hotel->contact_number = $request->input('contact_number');
        $hotel->about_your_hotel = $request->input('about_your_hotel');
        $img = $request->file('img');
        $filenameWithExt = $img->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension = $img->getClientOriginalExtension();
        $fileinfo = $filename.'_'.time().'.'.$extension;
        $path = $img->storeAs('public/images',$fileinfo);
        $hotel->img = $fileinfo;
        $hotel->user_id = auth()->user()->id;
        $hotel->save();

        return back()->with('success',' YOUR HOTEL REGISTERD');
        //dd($hotel);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //methanat mokadd dennoni ayye
    }
}
