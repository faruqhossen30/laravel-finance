@extends('layouts.app')

@section('title', 'Blogpage')
@section('content')
<div class="container mx-auto px-4 py-10 max-w-6xl bg-white">
    <h1 class="text-3xl font-extrabold text-gray-800 text-center mb-6">Privacy Policy</h1>
    {{-- <p class="text-gray-600 text-sm mb-6">Effective Date: <strong class="text-gray-800">[Insert Effective Date]</strong></p> --}}

    <p class="mb-6">
        At <strong>Bankingscoop.com</strong>, we value your trust and are committed to safeguarding your privacy. This Privacy Policy explains how we collect, use, store, and share your personal data when you interact with our website and services. It also details your rights and how you can exercise them. Please read this policy carefully to understand how we handle your information.
    </p>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">What Does This Policy Cover?</h2>
        <p>This Privacy Policy applies to all visitors and users of Bankingscoop.com. It governs how we collect, process, and protect your personal data while you use our website, tools, and services. This policy also explains your rights under applicable privacy laws, including how you can control your data and make informed decisions.</p>
    </section>
    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">What Data Do We Collect, Use, and Share? (Summary)</h2>
        <p>We collect data to provide and enhance our services, personalize your experience, and improve our website's functionality. The data we collect may include personal details, browsing behavior, and technical information. Additionally, we may share some information with trusted third-party partners to deliver certain services or comply with legal obligations.</p>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">What Data Do We Collect?</h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li><strong>Personal Data:</strong> Information you provide directly, such as your name, email address, and details shared when signing up for newsletters or using tools.</li>
            <li><strong>Technical Data:</strong> Automatically collected data such as IP address, browser type, device details, and pages visited.</li>
            <li><strong>Cookies and Tracking Data:</strong> Data about browsing behavior, preferences, and interactions to personalize experiences and analyze performance.</li>
        </ul>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">How Do We Use Your Data?</h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>To deliver personalized services, including loan calculators and credit card comparison tools.</li>
            <li>To send updates, newsletters, or promotional materials based on your preferences.</li>
            <li>To analyze usage patterns, improve website functionality, and enhance the overall user experience.</li>
            <li>To ensure compliance with applicable laws and regulations and maintain the security of our services.</li>
        </ul>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">How Do We Use Cookies?</h2>
        <p>Cookies are small text files stored on your device that help us improve your experience on our website. They allow us to remember your preferences, analyze traffic, and deliver relevant content. For example, cookies help us:</p>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Recognize your device when you revisit our site.</li>
            <li>Understand how you navigate the website to optimize its functionality.</li>
            <li>Provide tailored recommendations and insights based on your interactions.</li>
        </ul>
    </section>
    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">When Do We Share Data With Others?</h2>
        <p>We process your data based on one or more of the following legal grounds:
        </p>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Your consent, for example, when you sign up for our newsletter or agree to cookies.</li>
            <li>Legitimate interests, such as improving our services or marketing our tools.

            </li>
            <li>Compliance with legal obligations, such as retaining certain records for regulatory purposes.

            </li>
        </ul>
    </section>
    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">How Long Do We Keep Your Data?</h2>
        <p>We retain your data only as long as necessary to fulfill the purposes outlined in this Privacy Policy. This includes:
        </p>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Providing our services.
            </li>
            <li>Complying with legal obligations.

            </li>
            <li>Resolving disputes and enforcing agreements.


            </li>
        </ul>

        <p>Once the data is no longer needed, we securely delete or anonymize it.

        </p>
    </section>


    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">How Do We Keep Your Data Safe?
        </h2>
        <p>Protecting your data is our priority. We employ industry-standard security measures, such as encryption, secure servers, and regular audits, to prevent unauthorized access or disclosure. While no method is entirely foolproof, we continuously update our practices to address emerging threats.</p>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">How Can You Control Your Data?</h2>
        <p>You have several rights regarding your personal data, including:
        </p>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>The right to access, correct, or delete your data.

            </li>
            <li>Complying with legal obligations.

            </li>
            <li>The right to withdraw consent for processing or opt-out of marketing communications.


            </li>
            <li>The right to lodge a complaint with a data protection authority.


            </li>
        </ul>

        <p>To exercise these rights, please contact us using the details below.


        </p>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Region and Service-Specific Notices
        </h2>
        <p>Depending on your location, you may have additional rights under laws like the GDPR (European Union) or CCPA (California, USA). We will provide specific details relevant to your region upon request.</p>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Complaints
        </h2>
        <p>If you believe your data has been handled improperly, we encourage you to contact us first. If we cannot resolve your concerns, you may file a complaint with the appropriate data protection authority in your jurisdiction.</p>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Social Features
        </h2>
        <p>Our website may include features that allow you to share content or interact with social media platforms. If you use these features, your interactions may be visible to others and governed by the privacy policies of those platforms. We recommend reviewing their policies for additional information.</p>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Why We Can Use Your Data</h2>
        <p>We process your data based on one or more of the following legal grounds:
        </p>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Service Providers: We work with partners to host our website, analyze data, and deliver marketing campaigns.</li>
            <li>Legal Obligations: We may share information to comply with legal requirements, protect our rights, or enforce our terms of service.
            </li>
            <li>Business Transfers: In the event of a merger, acquisition, or sale of assets, your data may be transferred as part of the transaction.
            </li>
        </ul>
    </section>

    <section class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">How Can You Contact Us?</h2>
        <p>If you have any questions, concerns, or requests regarding this Privacy Policy, please contact us at:</p>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Email: <a href="mailto:info@bankingscoop.com" class="text-blue-600 hover:underline">info@bankingscoop.com</a></li>
        </ul>
    </section>

    <p class="text-sm text-gray-500">
        <strong>Note:</strong> We may update this Privacy Policy from time to time. Changes will be posted here with an updated "Effective Date."
    </p>
</div>
@endsection
