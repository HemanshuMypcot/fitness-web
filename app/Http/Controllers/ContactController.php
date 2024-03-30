<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    function index()
    {
        $data['tags'] = config('global.meta_tags')['contact_us'];
        return view("frontend/contact", $data);
    }

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

        $uuid = '134657985';
        $platform = 'web';

        $response = Http::withBasicAuth('admin', 'mypcot')
            ->withHeaders(['UUID' => $uuid, 'Platform' => $platform])
            ->post('http://skyonliners.com/demo/fitness-studio/webservices/v1/contact/create', $body)
            ->json();

        if ($response) {

            return redirect('contact_us')->with('success', 'Form submitted successfully!');
        } else {

            return redirect()->with('error', 'Error submitting form');
        }
    }
}
