<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostalCodeController extends Controller
{
    public function search(Request $request) {

        $postcode = \App\Models\Base\Postcode::whereSearch($request->postcode)->first();
        $prefecture = [
            'prefecture_id' => (int)substr($postcode->public_body_code, 0, 2),
            'city' => $postcode->city,
            'local' => $postcode->local,
        ];
        return $prefecture;

    }
}
