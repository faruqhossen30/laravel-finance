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


<div class="max-w-6xl mx-auto p-6 ">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">California Consumer Privacy Act (CCPA) Notice</h1>
    <p class="text-gray-600 mb-6">
      At Bankingscoop.com, we respect your privacy and are committed to giving you control over your personal information.
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
        <strong class="font-medium">Sell:</strong> Transferring personal data for monetary or other valuable consideration. <br>
        <strong class="font-medium">Share:</strong> Making personal data available for targeted advertising.
      </p>
    </div>

    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">How to Opt-Out</h2>
      <p class="text-gray-600 mb-4">California residents can opt-out using the following methods:</p>
      <ul class="list-decimal list-inside space-y-2 text-gray-600">
        <li>
          <strong class="font-medium">Online Form:</strong> Complete the <a href="#" class="text-blue-600 underline">Opt-Out Form</a>.
        </li>
        <li>
          <strong class="font-medium">Email:</strong> Send a request to <a href="mailto:info@bankingscoop.com" class="text-blue-600 underline">info@bankingscoop.com</a> with the subject: "Do Not Sell or Share My Personal Information." Include your full name and email.
        </li>
        <li>
          <strong class="font-medium">Cookie Preferences:</strong> Use the "Manage Cookies" link at the bottom of our website or adjust your browser settings.
        </li>
      </ul>
    </div>

    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">Verification Process</h2>
      <p class="text-gray-600">
        To protect your privacy, we may verify your identity before processing requests by confirming your email or other identifying information.
      </p>
    </div>

    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">Post Opt-Out Actions</h2>
      <p class="text-gray-600">
        Once your opt-out request is processed, we will stop sharing your data for targeted advertising. Previously shared data may remain with third parties, and essential sharing for operations will continue.
      </p>
    </div>

    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">Contact Us</h2>
      <p class="text-gray-600">
        If you have any questions about your privacy rights or the opt-out process, contact us at:
      </p>
      <ul class="space-y-2 text-gray-600">
        <li><strong>Email:</strong> <a href="mailto:info@bankingscoop.com" class="text-blue-600 underline">info@bankingscoop.com</a></li>
        <li><strong>Address:</strong> New York, United States</li>
      </ul>
    </div>
  </div>


  <div class="max-w-6xl mx-auto p-6 ">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Terms of Use</h1>
    <p class="text-gray-600 mb-6">
      Welcome to Bankingscoop.com. By accessing or using our website, you agree to comply with and be bound by these Terms of Use. Please read them carefully.
    </p>

    <!-- Section 1 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">1. Acceptance of Terms</h2>
      <p class="text-gray-600">
        By using Bankingscoop.com, you acknowledge that you have read, understood, and agree to these Terms of Use and our Privacy Policy. These terms constitute a legally binding agreement between you and Bankingscoop.com.
      </p>
    </div>

    <!-- Section 2 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">2. Services Offered</h2>
      <p class="text-gray-600">
        Bankingscoop.com provides tools, resources, and content to help users make informed financial decisions. This includes loan calculators, credit card comparisons, and mortgage rate insights. The information we provide is for informational purposes only and does not constitute financial, legal, or professional advice.
      </p>
    </div>

    <!-- Section 3 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">3. User Eligibility</h2>
      <p class="text-gray-600">
        Our website is intended for individuals who are 18 years or older and reside in jurisdictions where our services are legally permitted. By using our website, you confirm that you meet these requirements.
      </p>
    </div>

    <!-- Section 4 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">4. Intellectual Property</h2>
      <p class="text-gray-600">
        All content on Bankingscoop.com, including text, graphics, logos, tools, and software, is the property of Bankingscoop.com or its licensors and is protected by copyright, trademark, and other applicable laws. You may not copy, reproduce, distribute, or create derivative works from our content without our prior written permission.
      </p>
    </div>

    <!-- Section 5 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">5. Use of the Website</h2>
      <ul class="list-disc list-inside text-gray-600 space-y-2">
        <li>Use the site in a manner that violates any applicable laws or regulations.</li>
        <li>Attempt to gain unauthorized access to our systems or data.</li>
        <li>Disrupt the functionality of our website or interfere with other users' experience.</li>
        <li>Use automated systems (e.g., bots) to access the website without our written consent.</li>
      </ul>
    </div>

    <!-- Section 6 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">6. Third-Party Links and Services</h2>
      <p class="text-gray-600">
        Our website may contain links to third-party websites or services. These links are provided for your convenience and do not imply endorsement or control by Bankingscoop.com. We recommend reviewing their policies before engaging with them.
      </p>
    </div>

    <!-- Section 7 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">7. Disclaimer of Warranties</h2>
      <p class="text-gray-600">
        Bankingscoop.com is provided "as is" and "as available" without warranties of any kind, express or implied. Your use of the website is at your own risk.
      </p>
    </div>

    <!-- Section 8 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">8. Limitation of Liability</h2>
      <p class="text-gray-600">
        To the fullest extent permitted by law, Bankingscoop.com and its affiliates shall not be liable for any damages arising from your use of the website.
      </p>
    </div>

    <!-- Section 9 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">9. Indemnification</h2>
      <p class="text-gray-600">
        You agree to indemnify Bankingscoop.com from any claims arising from your use of the website or violation of these terms.
      </p>
    </div>

    <!-- Section 10 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">10. Changes to the Terms</h2>
      <p class="text-gray-600">
        We reserve the right to modify these terms at any time. Continued use of the website after changes constitutes your acceptance.
      </p>
    </div>

    <!-- Section 11 -->
    <div class="mb-8">
      <h2 class="text-xl font-semibold text-gray-700 mb-2">11. Contact Information</h2>
      <p class="text-gray-600">
        For questions or concerns, contact us at:
      </p>
      <ul class="text-gray-600 space-y-2">
        <li><strong>Email:</strong> <a href="mailto:info@bankingscoop.com" class="text-blue-600 underline">info@bankingscoop.com</a></li>
        <li><strong>Address:</strong> New York, United States</li>
      </ul>
    </div>
  </div>


@endsection
