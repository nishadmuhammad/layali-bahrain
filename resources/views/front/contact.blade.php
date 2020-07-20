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
                        <form action="" data-aos="fade-in">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" placeholder="Your full name" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" placeholder="Phone" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="" placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <input type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="location" data-aos="fade-up">
                            <h5>canada</h5>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18876276.614011902!2d-113.71945708548279!3d54.723116567819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1594892468223!5m2!1sen!2sin"
                                width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                            <p><img src="assets/img/location-black.svg" alt="">7250 Lancaster Avenue, Mississauga ON
                                L4T2L6</p>
                            <p><img src="assets/img/email-black.svg" alt="">info@mapletechspace.com</p>
                            <p><img src="assets/img/phone-black.svg" alt="">+1 (647) 614-4136</p>
                        </div>
                        <div class="location" data-aos="fade-up">
                            <h5>india</h5>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18876276.614011902!2d-113.71945708548279!3d54.723116567819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1594892468223!5m2!1sen!2sin"
                                width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                            <p><img src="assets/img/location-black.svg" alt="">7250 Lancaster Avenue, Mississauga ON
                                L4T2L6</p>
                            <p><img src="assets/img/email-black.svg" alt="">info@mapletechspace.com</p>
                            <p><img src="assets/img/phone-black.svg" alt="">+1 (647) 614-4136</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
