<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get()
    {
        return ["url" => "banners url"];
    }

    public function post(Request $request)
    {
        $name = $request->file('file')->getClientOriginalName();
        $name = uniqid() . '_' . $name;
        $request->file('file')->move('uploads', $name);
    }
}
