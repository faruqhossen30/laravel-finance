@extends('layouts.app')

@section('title', 'Blogpage')
@section('content')
<div class="max-w-6xl mx-auto p-6 ">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">California Consumer Privacy Act (CCPA) Notice</h1>
        <p class="text-gray-600 mb-6">
            At Bankingscoop.com, we respect your privacy and are committed to giving you control over your personal
            information.
        </p>

        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Your Rights Under the CCPA</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-600">
                <li>Opt-Out of the sale or sharing of personal information.</li>
                <li>Request access to or deletion of your personal data (subject to legal exceptions).</li>
                <li>Receive equal service and pricing regardless of your privacy choices.</li>
            </ul>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Definitions</h2>
            <p class="text-gray-600">
                <strong class="font-medium">Sell:</strong> Transferring personal data for monetary or other valuable
                consideration. <br>
                <strong class="font-medium">Share:</strong> Making personal data available for targeted advertising.
            </p>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">How to Opt-Out</h2>
            <p class="text-gray-600 mb-4">California residents can opt-out using the following methods:</p>
            <ul class="list-decimal list-inside space-y-2 text-gray-600">
                <li>
                    <strong class="font-medium">Online Form:</strong> Complete the <a href="#"
                        class="text-blue-600 underline">Opt-Out Form</a>.
                </li>
                <li>
                    <strong class="font-medium">Email:</strong> Send a request to <a href="mailto:info@bankingscoop.com"
                        class="text-blue-600 underline">info@bankingscoop.com</a> with the subject: "Do Not Sell or Share My
                    Personal Information." Include your full name and email.
                </li>
                <li>
                    <strong class="font-medium">Cookie Preferences:</strong> Use the "Manage Cookies" link at the bottom of
                    our website or adjust your browser settings.
                </li>
            </ul>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Verification Process</h2>
            <p class="text-gray-600">
                To protect your privacy, we may verify your identity before processing requests by confirming your email or
                other identifying information.
            </p>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Post Opt-Out Actions</h2>
            <p class="text-gray-600">
                Once your opt-out request is processed, we will stop sharing your data for targeted advertising. Previously
                shared data may remain with third parties, and essential sharing for operations will continue.
            </p>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Contact Us</h2>
            <p class="text-gray-600">
                If you have any questions about your privacy rights or the opt-out process, contact us at:
            </p>
            <ul class="space-y-2 text-gray-600">
                <li><strong>Email:</strong> <a href="mailto:info@bankingscoop.com"
                        class="text-blue-600 underline">info@bankingscoop.com</a></li>
                <li><strong>Address:</strong> New York, United States</li>
            </ul>
        </div>
    </div>

@endsection
