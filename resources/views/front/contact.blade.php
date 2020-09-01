@extends('front.layouts.app')
@section('title', 'Contact | Best Digital Marketing Agency in Toronto | MTS')
@section('description','Need a Dynamic Website for your Business? Looking for an SEO Expert? Book 30 minutes Free consultation. Maple Tech Space is available to help, 24 hours a day')
@section('keywords','search engine optimization toronto,seo consultant toronto,toronto seo expert,seo companies toronto,website developers toronto,web design company toronto,toronto web designers,web developers in toronto,toronto marketing agencies,digital marketing companies toronto,internet marketing in toronto,marketing firms toronto')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('canonical','https://www.mapletechspace.com/contact')
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.1598553904887!2d-79.6979458845025!3d43.64484237912163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3f9dfd586049%3A0x2d5735190c921e6a!2s191%20Superior%20Blvd%2C%20Mississauga%2C%20ON%20L5T%202L6%2C%20Canada!5e0!3m2!1sen!2sin!4v1598918791539!5m2!1sen!2sin" width="250" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <p><img src="assets/img/location-black.svg" alt="MTS Location">191 Superior BlvdMississauga, ON L5T 2L6</p>
                            <p><img src="assets/img/email-black.svg" alt="MTS Email">info@mapletechspace.com</p>
                            <p><img src="assets/img/phone-black.svg" alt="MTS Phone">+1 (647) 339-9023</p>
                        </div>
                        <div class="location" data-aos="fade-up">
                            <h5>india</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d976.0486858692699!2d75.47026932915867!3d11.891523799473184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba43b235d4c4db7%3A0x32bfe63021da7a3b!2sTaxi%20Stand%20Shopping%20Complex%2C%20Chakkarakkal%2C%20Kerala%20670613!5e0!3m2!1sen!2sin!4v1595237787912!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <p><img src="assets/img/location-black.svg" alt="MTS Location">14/554, Taxi Stand Shopping Complex, Chakkarakkal, Kannur, Kerala, 670613.</p>
                            <p><img src="assets/img/email-black.svg" alt="MTS Email">info@mapletechspace.com</p>
                            <p><img src="assets/img/phone-black.svg" alt="MTS Phone">+919037757027</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
