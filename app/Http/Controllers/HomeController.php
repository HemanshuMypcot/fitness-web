<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    function index()
    {
        $data['tags'] = config('global.meta_tags')['home'];
        return view("frontend/home", $data);
    }

}
