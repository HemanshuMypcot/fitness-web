<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\ContactUsRequest;

class ContactController extends Controller
{
    public function storeContactForm(ContactUsRequest $request)
    {
        $validateData = $request->all();

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

            return response()->json(['success' => $response], 200);
        } else {

            return response()->json(['error' => 'Error submitting form.'], 500);
        }
    }

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
