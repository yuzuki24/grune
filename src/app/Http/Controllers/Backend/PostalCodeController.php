<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostalCodeController extends Controller
{
    public function search(Request $request) {
        dd(($request->postcode));
        return \App\PostalCode::whereSearch($request->first_code, $request->last_code)->first();

    }
}
