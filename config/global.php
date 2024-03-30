<?php

return [
	'contact_no' => '',
	'phone' => '',
	'company_address' => '',
	'SEND_CUSTOM_EMAIL' => TRUE,
	'EMAIL_FROM' => env('MAIL_FROM_ADDRESS', 'singharjun93124@gmail.com'),
	'EMAIL_FROM_NAME' => env('MAIL_FROM_NAME', 'Singh Arjun'),
	'EMAIL_TO' => ['ritesh.s.mypcot@gmail.com', 'ankita.s@mypcot.com', 'chhotelal.s@mypcot.com'],
	'base_path' => env('BASE_URL'),
	'meta_tags' => [
		"home" => [
			"canonical" => env('BASE_URL'),
			"title" => "Studio Sunlife",
			"keywords" => "Savvy business solutions; contract management, TDS Management,
			gst input credit matching system, payroll management system, foreign remittance system, einvoice system, ticketing system, dividend distribution system",
			"description" => "Welcome to Savvy Business Solutions, we streamline operations with Contract and TDS Management. Optimize financial processes through a comprehensive GST Input Credit Matching System. Ensure accurate and efficient payroll processing with our Payroll Management System. Facilitate seamless foreign remittance and comply with regulations. Simplify invoicing and financial transactions with our E-invoice, Ticketing, and Dividend Distribution Systems"
		],
		"faq" => [
			"canonical" => env('BASE_URL').'faq',
			"title" => "FAQs",
			"keywords" => "Contact, Get in touch, Feedback, Inquiries, Collaboration, Partnership, Communication.",
			"description" => "Get in touch with us today through our Contact page. We value your feedback, inquiries, and collaboration opportunities."
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
			"keywords" => "Privacy, Policy, Data Protection, Personal Information, Confidentiality, Consent, Trust, Transparency, Compliance, Rights.",
			"description" => "Your privacy matters to us. Welcome to our Privacy Policy page, where we outline how we collect, use, and safeguard your personal information. We are committed to protecting your data and ensuring its confidentiality."
		]

	]
];
?>
