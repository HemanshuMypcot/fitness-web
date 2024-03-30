<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    function index()
    {
        $data['tags'] = config('global.meta_tags')['faq'];
        return view("frontend/faq", $data);
    }
}
