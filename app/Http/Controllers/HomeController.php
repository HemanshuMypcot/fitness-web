<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function fetchAndDisplayContact(Request $request)
    {
        $uuid =Config::get('global.uuid');
        $platform = Config::get('global.platform');
        $api_path=Config::get('global.api_path');

        $response = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders([
                'UUID' => $uuid,
                'Platform' => $platform
            ])
            ->post($api_path.'/contact/show')
            ->json();

        if ($response ) {
            $data = $response;
            $ContactContent = $data['data']['result'];
            $tags = config('global.meta_tags')['home'];

            return view('frontend.home', ['ContactContent' => $ContactContent,'tags' => $tags]);
        } else {

            return back()->with('error', 'Failed to fetch terms and conditions.');
        }
    }

}
