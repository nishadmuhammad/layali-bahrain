@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="portfolio page">
        <div class="banner">
            <div class="owl-carousel owl-theme portfolio-banner" data-aos="fade-in">
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="{{asset('assets/img/banner02.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Neena Varghese</h2>
                            <p>Realtor Website</p>
                            <a href="http://neenavarghese.com/"><img src="{{asset('assets/img/more-grey.png')}}" alt=""
                                                                     class="img-fluid">View project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="{{asset('assets/img/banner01.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Sybu Mathew</h2>
                            <p>Realtor Website</p>
                            <a href="https://www.sybumathew.com/" target="_blank"><img
                                    src="{{asset('assets/img/more-grey.png')}}" alt="" class="img-fluid">View
                                project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="project-image">
                            <img src="{{asset('assets/img/banner03.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="project-detail">
                            <h2>Manukaii</h2>
                            <p>Product Website</p>
                            <a href=""><img src="{{asset('assets/img/more-grey.png')}}" alt="" class="img-fluid">View
                                project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-inner">
            <div class="container">
                <h5>Portfolio</h5>
                <h4>Our latest projects</h4>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Good design at Maple Tech Space is a blend of craft, science, storytelling, propaganda and functionality.We value relationship with our clients and for every business, whether small or big we understand that customer satisfaction will sustain and help grow a business in the long term.</p>
                        <p>Our effects on brand growth are proven. We offer a robust, creative portfolio that shows off the very best of what we do, Presenting to you, snapshots of our latest projects.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/sybumock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Sybu Mathew</h6>
                                <p>“Credibility , Trust, Reliability - the Reality about Realty.” Our website design for Realtor, Sybu Mathew Real Estate has been custom designed to showcase these core values.<br>
                                    Take a look for yourself : <a target="_blank" href="https://www.sybumathewrealestate.com">www.sybumathewrealestate.com</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/neenamock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Neena Varghese</h6>
                                <p>“Every elegant design begins with a great story! “ Our website for mortgage agent , Ms Neena Varghese is inspired by the elegance, intelligence and resilience that our client herself radiates.<br/>

                                    Check it out on : <a target="_blank" href="https://www.neenavarghese.com">www.neenavarghese.com</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/manukaiimock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Manukaii</h6>
                                <p>Our award-winning designer makes us all proud by adding another feather to his cap by bagging yet another award at the "99 designs Global Competition". </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/ecom.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Mobile App Development</h6>
                                <p>The Power of Digital : Unfathomed, Unmeasured and Endless. Stay connected with the World, with Apps customized for every business need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/sportz999mock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Sportz999</h6>
                                <p>“Creativity is inventing, growing, taking risks and having fun”, very similar to the amazing world of Sports. For all the Sports buffs out there, click on <a target="_blank" href="www.sportz999.com">www.sportz999.com</a> to get your dose of Sports stories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/babitamock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Babita Gupta</h6>
                                <p>“Our job is to take small ideas and build on them to make it tangible and unique””. The Website done for Realtor, Ms Babitha Gupta was to highlight the awe-inspiring work done by our client.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/stringsandbeadsmock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Strings and Beads</h6>
                                <p>“Design brings content to focus and design makes function visible”.
                                    This sums up the concept used for designing the website for our UAE based client, “Strings and Beads” who specialize in selling innovative products of healing jewellery. <br/>Click here: <a target="_blank" href="www.stringsandbeads.com">www.stringsandbeads.com</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/fostermock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Product Website</span>
                                <h6>Foster Hot Bred</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/chaihutmock.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <span>Restaurant Website</span>
                                <h6>Chaihut</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
