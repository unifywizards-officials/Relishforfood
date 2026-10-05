@extends('layouts.guest.master')



@section('page_level_style')
<style>
    @media (min-width: 768px) {
        .head-row {
            margin-top: 4% !important;
        }
    }

    @media (max-width: 768px) {
        .spann-d {
            font-size: 13px !important;
        }
    }
    section{
        padding-bottom: 25px !important;
    }
</style>
@endsection

@section('content')
<section class="cover-background ipad-top-space-margin md-background-position-left-center"
    style="background-image: url(images/demo-restaurant-about-title-bg.jpg);">
    <header class="container text-center my-2 head-row">
        <h1 class="alt-font fw-400 fs-35 text-dark-gray" style="text-transform: none;">
            Your Privacy, Our Passion: Safeguarding What Matters
        </h1>
    </header>

</section>
<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-md-12 last-paragraph-no-margin text-center text-md-start">
                     
                        <p>At Relish, we prioritize your privacy and are committed to protecting your personal information. This privacy policy explains how we collect, use, and safeguard your data when you interact with our services. We believe that transparency is essential in building trust, and we want you to feel confident in how your information is handled. Our goal is to create a safe and enjoyable experience for all our guests.</p>

                        <p>We collect information such as your name, email address, phone number, and payment details when you make a reservation, place an order, or sign up for promotions. Additionally, we may gather information through cookies when you visit our website to enhance your browsing experience. This data helps us tailor our services to better meet your needs and preferences. We strive to minimize the information we collect to what is necessary for your experience.</p>

                        <p>Your information is used to process orders and reservations, provide personalized experiences, and keep you informed about promotions and events at Relish. We do not sell your data to third parties. We take your privacy seriously and are dedicated to using your information solely for our restaurant’s purposes. Our team is trained to handle your information with the utmost respect and confidentiality.</p>

                        <p>We implement security measures to protect your personal data. However, no online platform is completely secure, and while we strive to safeguard your information, we cannot guarantee complete security. We continuously review our security practices to enhance the protection of your personal data. If any breaches occur, we will notify you promptly and take the necessary steps to rectify the situation.</p>


                        <p>We reserve the right to update this privacy policy at any time to reflect changes in our practices or legal obligations. Please check this page periodically for updates. Your continued use of our services signifies your acceptance of any changes made to this policy. We appreciate your trust in us and are committed to maintaining the privacy of your information.</p>

                        <p>In addition to the rights outlined above, we encourage you to be proactive in managing your privacy settings on our website and any third-party platforms you may interact with. Regularly reviewing your preferences will help you control the information you share and enhance your overall experience with us.</p>

                        <p>Lastly, we may use aggregated and anonymized data for analytical purposes to improve our services and understand customer preferences better. This data does not identify you personally and is used solely to enhance our offerings and ensure that we continue to meet your expectations at Relish.</p>

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page_level_script')
@endsection