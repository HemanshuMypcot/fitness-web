<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    public function fetchAndDisplayContact(Request $request)
    {
        $uuid = '134657985';
        $platform = 'web';
        $response = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders([
                'UUID' => $uuid,
                'Platform' => $platform
            ])
            ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/contact/show')
            ->json();

        $response_2 = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders([
                'UUID' => $uuid,
                'Platform' => $platform,
                'version'=>'2'
            ])
            ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/startup_api')
            ->json();
        if ($response ) {
            $data = $response;
            $data_2 = $response_2;

            $ContactContent = $data['data']['result'];
            $LinksContent = $data_2['data']['result'];
            $tags = config('global.meta_tags')['home'];

            return view('frontend.home', ['ContactContent' => $ContactContent,'tags' => $tags,'LinksContent'=>$LinksContent]);
        } else {

            return back()->with('error', 'Failed to fetch terms and conditions.');
        }
    }

}
