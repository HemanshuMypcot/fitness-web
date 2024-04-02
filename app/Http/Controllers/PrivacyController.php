<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class PrivacyController extends Controller
{

    public function fetchAndDisplayPrivacy(Request $request)
    {
        $uuid =Config::get('global.uuid');
        $platform = Config::get('global.platform');
        $api_path=Config::get('global.api_path');

        $response = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders([
                'UUID' => $uuid,
                'Platform' => $platform
            ])
            ->post($api_path.'/policies', [
                'type' => 'policy'
            ])
            ->json();

        $response_2 = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders([
                'UUID' => $uuid,
                'Platform' => $platform
            ])
            ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/contact/show')
            ->json();
        if ($response) {
            $data = $response;
            $data_1 = $response_2;
            $privacyContent = $data['data']['result']['content'];
            $ContactContent = $data_1['data']['result'];
            $tags = config('global.meta_tags')['privacy_policy'];

            return view('frontend.privacy', ['privacyContent' => $privacyContent, 'tags' => $tags,'ContactContent'=>$ContactContent]);
        } else {
            
            return back()->with('error', 'Failed to fetch privacy policy.');
        }
    }
}
