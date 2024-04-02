<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    public function storeContactForm(Request $request)
    {
        $validateData = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|max:255",
            "message" => "nullable|max:255",
        ]);

        $body = [
            "name" => $validateData['name'],
            "email" => $validateData['email'],
            "message" => $validateData['message']
        ];

        $uuid =Config::get('global.uuid');
        $platform = Config::get('global.platform');
        $api_path=Config::get('global.api_path');

        $response = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders(['UUID' => $uuid, 'Platform' => $platform])
            ->post($api_path.'/contact/create', $body)
            ->json();

        if ($response) {

            return redirect('contact_us')->with('success', 'Message Submitted Successfulyy!!');
        } else {

            return redirect()->with('error', 'Something went wrong');
        }
    }

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
        if ($response) {
            $data = $response;
            $ContactContent = $data['data']['result'];
            $tags = config('global.meta_tags')['contact_us'];

            return view('frontend.contact', ['ContactContent' => $ContactContent,'tags' => $tags]);
        } else {

            return back()->with('error', 'Failed to fetch terms and conditions.');
        }
    }
}
