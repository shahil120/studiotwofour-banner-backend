<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

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
        $result = Banner::all();
        return $result;
    }

    public function post(Request $request)
    {
        $name = $request->file('banner')->getClientOriginalName();
        $name = uniqid() . '_' . $name;
        $request->file('banner')->move('uploads', $name);

        $banner = new Banner();
        $banner->name = $name;
        $banner->save();

        return [
            'message' => 'success'
        ];

    }
}
