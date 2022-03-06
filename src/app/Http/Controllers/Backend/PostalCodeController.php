<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostalCodeController extends Controller
{
    public function search(Request $request) {

        return \App\Models\Base\Postcode::whereSearch($request->postcode)->first();

    }
}
