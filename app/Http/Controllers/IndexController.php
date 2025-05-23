<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {

        // dd(Listing::all());
        // dd(Auth::user());

        return Inertia('Index/Index',
        [
            'message'=> 'Hello from Laravel!'
        ]
    )   ;

    }


    public function show()
    {
        return Inertia('Index/Show');

    }


}
