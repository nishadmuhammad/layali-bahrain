@extends('front.layouts.app')
@section('title', 'Maple Tech Space')
@section('description','')
@section('keywords','')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="about-us page">
        <div class="banner-common">
            <div class="container">
                <h1>About</h1>
            </div>
        </div>
        <div class="about-inner" data-aos="fade-up">
            <div class="container">
                <h4>About maple tech space</h4>
                <div class="row">
                    <div class="col-sm-12">
                        <p>We conceptualize and collaborate with our clients to elevate their business in a constantly
                            evolving Digital Age. Maple Tech Space has been helping businesses online reach their
                            objectives by providing unique solutions to digital marketing challenges, since our
                            inception in 2013. At Maple Tech Space, we consider the clients’ vision our utmost priority
                            as we transform and reflect it in the Digital space. We prioritize business needs at the
                            center of all our work and are constantly driven by results. In our view, relationships are
                            stronger than contracts which is why it is our main goal to bring clients closer to their
                            consumers. We started our journey by launching the website for Kannur Government Engineering
                            College and over the years have grown by leaps and bounds to even get recognized by the
                            “Kerala Start-Up” mission. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-app" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Mobile app</h3>
                        <span>Development</span>
                    </div>
                    <div class="col-sm-6">
                        <h4>At Maple Tech Space, we consider
                            the clients’ vision our utmost priority
                            as we transform</h4>
                    </div>
                </div>

            </div>

        </div>
        <div class="our-team">
            <div class="container">
                <h5 data-aos="fade-right">Meet Our Team</h5>
                <div class="team-row">
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="assets/img/rohith.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Rohith Mohandas</h6>
                            <p>President</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="{{asset('assets/img/robin.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Robin cheriyan</h6>
                            <p>Chief Executive Officer</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="{{asset('assets/img/kamal.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Kamal</h6>
                            <p>Chief Operating Officer</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="assets/img/jithin.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Jithin Parakka</h6>
                            <p>Chief Technical Officer</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="assets/img/sanal.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Sanoop M S</h6>
                            <p>Designer Head</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="assets/img/team2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Gokul Prasad</h6>
                            <p>Digital Marketing Lead</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="assets/img/nikhil.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Nikhil Varghese</h6>
                            <p>UI/UX Lead</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="assets/img/joseph.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Joseph John</h6>
                            <p>Service Lead</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="assets/img/team4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Priyanka O P</h6>
                            <p>Full Stack Lead</p>
                        </div>
                    </div>
                    <div class="team-item" data-aos="fade-up">
                        <div class="team-image">
                            <img src="{{asset('assets/img/diana.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="member-details">
                            <h6>Diana M Thomas</h6>
                            <p>Content Strategist</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
