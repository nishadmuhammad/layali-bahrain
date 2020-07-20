@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="contact-page page">
        <div class="banner-common">
            <div class="container">
                <h1>contact</h1>
            </div>
        </div>
        <div class="container">
            <div class="contact-inner">
                <div class="row">
                    <div class="col-sm-6">
                        <h5>Book for 30 minutes</h5>
                        <h4>Free consultation</h4>
                        <form action="{{route('enquire')}}" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" placeholder="Your full name" class="form-control" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" name="phone" placeholder="Phone" class="form-control" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <input type="submit" value="Send Message">
                                </div>
                                <div class="pt-2">
                                    <div id="thanks" style="display: none;text-align: center">
                                        Thank you for contacting us.<br/>We will get back to you soon!
                                    </div>
                                    <div class="response" style="display: none">
                                        Please wait <i class="fa fa-cog fa-spin"></i>
                                    </div>
                                    <div class="error-message mt-3"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="location" data-aos="fade-up">
                            <h5>canada</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.9456627821764!2d-79.64801118450033!3d43.71167827911927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3bf75ef7d22d%3A0xdc94d09198d4eed2!2s7250%20Lancaster%20Ave%2C%20Mississauga%2C%20ON%20L4T%202L6%2C%20Canada!5e0!3m2!1sen!2sin!4v1595212993794!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <p><img src="assets/img/location-black.svg" alt="">7250 Lancaster Avenue, Mississauga ON
                                L4T2L6</p>
                            <p><img src="assets/img/email-black.svg" alt="">info@mapletechspace.com</p>
                            <p><img src="assets/img/phone-black.svg" alt="">+1(647)673-3516</p>
                        </div>
                        <div class="location" data-aos="fade-up">
                            <h5>india</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488.0245780893257!2d75.47038424165784!3d11.891392693336005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba43b235b07f9dd%3A0x8771d895c65c7f6f!2sTaxi%20Stand%2C%20Muzhappala%20Rd%2C%20Chakkarakkal%2C%20Kerala%20670613!5e0!3m2!1sen!2sin!4v1595213232307!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <p><img src="assets/img/location-black.svg" alt="">14/554, Taxi Stand Building Complex, Chakkarakkal, Kannur, Kerala, 670613.</p>
                            <p><img src="assets/img/email-black.svg" alt="">info@mapletechspace.com</p>
                            <p><img src="assets/img/phone-black.svg" alt="">+1(647)673-3516</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
