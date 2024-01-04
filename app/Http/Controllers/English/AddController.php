<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('english.add');
    }
}
