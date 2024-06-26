<?php

return [
	'android_app_link'=>'http://www.android.com',
	'ios_app_link'=>'http://www.ios.com',
	'SEND_CUSTOM_EMAIL' => TRUE,
	'EMAIL_FROM' => env('MAIL_FROM_ADDRESS', 'singharjun93124@gmail.com'),
	'EMAIL_FROM_NAME' => env('MAIL_FROM_NAME', 'Singh Arjun'),
	'EMAIL_TO' => ['ritesh.s.mypcot@gmail.com', 'ankita.s@mypcot.com', 'chhotelal.s@mypcot.com'],
	'base_path' => env('BASE_URL'),
	'uuid'=>'134657985',
	'platform'=>'web',
	'api_path' => env('API_URL'),
	'meta_tags' => [
		"home" => [
			"canonical" => env('BASE_URL'),
			"title" => "Studio Sunlife",
			"keywords" => "Studio Sunlife: fitness session, kickboxing, dancing, yoga, fitness, training, dance, boxing, session, classes,crossfit, personal fitness, dance fitness",
			"description" => "Welcome to Studio Sunlife for an invigorating fitness session where you can unleash your inner warrior with kickboxing, groove to the rhythm with dancing, and find inner peace through yoga. With a variety of classes tailored to your preferences, embark on a journey to holistic well-being and vitality"
		],
		"contact_us" => [
			"canonical" => env('BASE_URL').'contact_us',
			"title" => "Contact Us",
			"keywords" => "Contact, Get in touch, Feedback, Inquiries, Collaboration, Partnership, Communication.",
			"description" => "Get in touch with us today through our Contact page. We value your feedback, inquiries, and collaboration opportunities."
		],
		"privacy_policy" => [
			"canonical" => env('BASE_URL').'privacy',
			"title" => "Privacy & Policy",
			"keywords" => "Privacy, Policy, Data Protection, Personal Information, Confidentiality, Consent, Trust, Transparency, Compliance, Rights.",
			"description" => "Your privacy matters to us. Welcome to our Privacy Policy page, where we outline how we collect, use, and safeguard your personal information. We are committed to protecting your data and ensuring its confidentiality."
        ],
		"terms_conditions" => [
			"canonical" => env('BASE_URL').'terms',
			"title" => "Terms & Conditions",
			"keywords" => " Agreement, user rights, liabilities, warranties, limitations of liability, indemnification, dispute resolution, governing law, intellectual property rights, privacy policy, cookies, termination, and updates",
			"description" => "Explore the essential components of our Terms & Conditions, covering user rights, liabilities, warranties, and more. Navigate through key aspects such as dispute resolution, privacy policies, and updates to ensure clarity and transparency in our agreement"
		]

	]
];
?>
