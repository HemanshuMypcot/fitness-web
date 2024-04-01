<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TermsController extends Controller
{

    public function fetchAndDisplayTerms(Request $request)
    {
        $uuid = '134657985';
        $platform = 'web';
        $response = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders([
                'UUID' => $uuid,
                'Platform' => $platform
            ])
            ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/policies', [
                'type' => 'terms'
            ])
            ->json();
        $response_2 = Http::withBasicAuth('admin', 'mypcot')
        ->withHeaders([
            'UUID' => $uuid,
            'Platform' => $platform
        ])
        ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/contact/show')
        ->json();
        if ($response && $response_2) {
            $data = $response;
            $data_1 = $response_2;
            $termsContent = $data['data']['result']['content'];
            $ContactContent = $data_1['data']['result'];
            $tags = config('global.meta_tags')['terms_conditions'];
            // echo "<pre>";
            // print_r($termsContent);exit;

            return view('frontend.terms', ['termsContent' => $termsContent, 'tags' => $tags, 'ContactContent'=>$ContactContent]);
        } else {

            return back()->with('error', 'Failed to fetch terms and conditions.');
        }
    
    }
}
