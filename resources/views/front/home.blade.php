@extends('front.layouts.app')
@section('title', 'Best SEO, Digital Marketing, Web Development Company Toronto')
@section('description','We are a team of Digital Creators expertise in SEO, Digital and Social Media Marketing, Website Development, Application Development, IT consulting and Branding.')
@section('keywords','Best seo company in toronto,Best digital marketing company in toronto,Best web development companies in toronto,Toronto seo company,Toronto digital marketing agency,Best web development companies in toronto,Web development agency toronto,Low Cost SEO Services toronto')
@section('ogImage'){{asset('assets/img/logo.png')}}@endsection
@section('navClass','index')
@section('logo'){{asset('assets/img/logo.png')}}@endsection
@section('canonical','https://www.LAYALI BAHRAIN.com')
@section('content')
    <div class="index">
        <div class="owl-carousel owl-theme banner-slider">

            <div class="item">
                <div class="banner-item">
                    <div class="banner-image">
                        <img src="assets/img/business-strategy.png" alt="IT consulting & Branding"
                             class="img-fluid d-none d-sm-block">
                        <img src="assets/img/business-strategy-2.png" alt="IT consulting & Branding"
                             class="img-fluid d-block d-sm-none">
                    </div>
                    <div class="banner-details">
                        <h1>IT Consulting & Branding</h1>
                        <a href="{{route('servicesShow','it-consulting')}}">More services</a>
                    </div>
                </div>
            </div>
            <!-- <div class="item">
                <div class="banner-item">
                    <div class="banner-image">
                        <img src="assets/img/business-strategy-3.png" alt="Website Design" class="img-fluid d-none d-sm-block">
                        <img src="assets/img/web-design2.png" alt="Website Design" class="img-fluid d-block d-sm-none">
                    </div>
                    <div class="banner-details">
                        <h1>Website Design and Development</h1>
                        <a href="{{route('servicesShow','website-design-and-development')}}">More services</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="banner-item">
                    <div class="banner-image">
                        <img src="assets/img/seo-banner.png" alt="SEO" class="img-fluid d-none d-sm-block">
                        <img src="assets/img/seo-banner2.png" alt="SEO" class="img-fluid d-block d-sm-none">
                    </div>
                    <div class="banner-details">
                        <h1>SEO & Digital Marketing</h1>
                        <a href="{{route('servicesShow','search-engine-optimization')}}">More services</a>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="about">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <h2>About</h2>
                        <p>LAYALI BAHRAIN</p>
                        <a href="{{route('about')}}" class="d-none d-sm-block">Read more</a>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <p style="text-align: justify;text-justify: inter-word;">We are a team of experienced
                                    Digital Creators who provide cost effective, contemporary technological solutions
                                    for a wider global reach. We help our clients harness the Digital wave by providing
                                    exceptional services in Digital Marketing,Website and App Development , Branding,
                                    Search Engine Optimisation, IT Consulting, & Software Development</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="text-align: justify;text-justify: inter-word;">We prioritize our clients'
                                    business strategy while handling their websites, social media and marketing
                                    campaigns for greater consumer visibility and impact. In our view, the power of
                                    human relationships is unmatched, which is why our team values transparency and
                                    communication above anything else.</p>
                                <a href="{{route('about')}}" class="d-block d-sm-none">Read more</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="our-services" data-aos="fade-up">
            <div class="container">
                <h3 class="text-center">Our Services</h3>
                <a href="{{route('services')}}" class="text-center view-all">View All</a>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <div class="owl-carousel owl-theme services d-none d-sm-block" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','branding')}}">
                                        <img src="{{asset('assets/img/branding.svg')}}" alt="Branding"
                                             class="service-image img-fluid">
                                        <h5>Branding</h5>
                                        <p>Deep diving into the unfamiliar waters of Brand Mangement? Look to the
                                            experts, MTS to guide you through and be a class apart from the
                                            competition.</p>
                                        <a href="{{route('servicesShow','branding')}}" class="read-more"><img
                                                src="{{asset('assets/img/more-grey.png')}}"
                                                alt="Read Branding Services"
                                                class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','digital-marketing')}}">
                                        <img src="{{asset('assets/img/digital-marketing.svg')}}" alt="Digital Marketing"
                                             class="service-image img-fluid">
                                        <h5>Digital Marketing</h5>
                                        <p>Attracting, Binding, Converting and Delighting.... The "ABCD " of Digital
                                            marketing and Business Strategy at LAYALI BAHRAIN.</p>
                                        <a href="{{route('servicesShow','digital-marketing')}}" class="read-more"><img
                                                src="{{asset('assets/img/more-grey.png')}}"
                                                alt="Read Digital Marketing"
                                                class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','it-consulting')}}">
                                        <img src="{{asset('assets/img/it-consulting.svg')}}" alt="IT consulting"
                                             class="service-image img-fluid">
                                        <h5>IT Consulting</h5>
                                        <p>With our deep understanding of the web and strong marketing expertise, we’ve
                                            helped scores of companies redefine what they are doing online.</p>
                                        <a href="{{route('servicesShow','it-consulting')}}" class="read-more"><img
                                                src="{{asset('assets/img/more-grey.png')}}"
                                                alt="Read IT consulting "
                                                class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','android-and-ios-development')}}">
                                        <img src="{{asset('assets/img/android-ios.svg')}}" alt="Android and iOS apps"
                                             class="service-image img-fluid">
                                        <h5>App Development</h5>
                                        <p>If you're looking to leverage mobile technology for your business, our best
                                            app developers are at your service for both Android and iOS apps.</p>
                                        <a href="{{route('servicesShow','android-and-ios-development')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read Android and iOS apps"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','website-design-and-development')}}">
                                        <img src="{{asset('assets/img/web-development-designing.svg')}}"
                                             alt="Website Design"
                                             class="service-image img-fluid">
                                        <h5>Website Design and Development</h5>
                                        <p>Boost your business through a technology first approach to showcase your
                                            uniqueness. Dont settle with a template based , generic website.</p>
                                        <a href="{{route('servicesShow','website-design-and-development')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read Website Design"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','custom-software-development')}}">
                                        <img src="{{asset('assets/img/software.svg')}}"
                                             alt="Custom Software Development"
                                             class="service-image img-fluid">
                                        <h5>Custom Software Development</h5>
                                        <p>We build robust and scalable web apps that are custom made using rapid
                                            development processes leveraging the most cultured web technologies.</p>
                                        <a href="{{route('servicesShow','custom-software-development')}}"
                                           class="read-more"><img src="assets/img/more-grey.png"
                                                                  alt="Read Custom Software Development"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','search-engine-optimization')}}">
                                        <img src="{{asset('assets/img/search-engine-optimization.svg')}}"
                                             alt="Search Engine Optimization"
                                             class="service-image img-fluid">
                                        <h5>Search Engine Optimization</h5>
                                        <p>At LAYALI BAHRAIN, we take care of all your business concerns regarding SEO
                                            and make sure that your website is coming on the first page of Google
                                            results.</p>
                                        <a href="{{route('servicesShow','search-engine-optimization')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read Search Engine Optimization"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                                <div class="service">
                                    <a href="{{route('servicesShow','social-media-marketing')}}">
                                        <img src="{{asset('assets/img/social-media-marketing.svg')}}"
                                             alt="Social Media Marketing"
                                             class="service-image img-fluid">
                                        <h5>Social Media Marketing</h5>
                                        <p>Great marketing on social media can bring remarkable success to your
                                            business, creating devoted brand advocates and even driving leads and
                                            sales.</p>
                                        <a href="{{route('servicesShow','social-media-marketing')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read Social Media Marketing"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme services d-block d-sm-none" data-aos="fade-in">
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','branding')}}">
                                        <img src="{{asset('assets/img/branding.svg')}}" alt="Branding"
                                             class="service-image img-fluid">
                                        <h5>Branding</h5>
                                        <p>Deep diving into the unfamiliar waters of Brand Mangement? Look to the
                                            experts, MTS to guide you through and be a class apart from the
                                            competition.</p>
                                        <a href="{{route('servicesShow','branding')}}" class="read-more"><img
                                                src="{{asset('assets/img/more-grey.png')}}"
                                                alt="Read Branding"
                                                class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','digital-marketing')}}">
                                        <img src="{{asset('assets/img/digital-marketing.svg')}}" alt="Digital Marketing"
                                             class="service-image img-fluid">
                                        <h5>Digital Marketing</h5>
                                        <p>Attracting, Binding, Converting and Delighting.... The "ABCD " of Digital
                                            marketing and Business Strategy at LAYALI BAHRAIN.</p>
                                        <a href="{{route('servicesShow','digital-marketing')}}" class="read-more"><img
                                                src="{{asset('assets/img/more-grey.png')}}"
                                                alt="Read Digital Marketing"
                                                class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','it-consulting')}}">
                                        <img src="{{asset('assets/img/it-consulting.svg')}}" alt="IT consulting"
                                             class="service-image img-fluid">
                                        <h5>IT Consulting</h5>
                                        <p>With our deep understanding of the web and strong marketing expertise, we’ve
                                            helped scores of companies redefine what they are doing online.</p>
                                        <a href="{{route('servicesShow','it-consulting')}}" class="read-more"><img
                                                src="{{asset('assets/img/more-grey.png')}}"
                                                alt="Read IT consulting "
                                                class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','android-and-ios-development')}}">
                                        <img src="{{asset('assets/img/android-ios.svg')}}" alt="App Development"
                                             class="service-image img-fluid">
                                        <h5>App Development</h5>
                                        <p>If you're looking to leverage mobile technology for your business, our best
                                            app developers are at your service for both Android and IOS apps.</p>
                                        <a href="{{route('servicesShow','android-and-ios-development')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read App Development"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','website-design-and-development')}}">
                                        <img src="{{asset('assets/img/web-development-designing.svg')}}"
                                             alt="Website Design"
                                             class="service-image img-fluid">
                                        <h5>Website Design and Development</h5>
                                        <p>Boost your business through a technology first approach to showcase your
                                            uniqueness. Dont settle with a template based , generic website.</p>
                                        <a href="{{route('servicesShow','website-design-and-development')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read Website Design"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','custom-software-development')}}">
                                        <img src="{{asset('assets/img/software.svg')}}"
                                             alt="Custom Software Development"
                                             class="service-image img-fluid">
                                        <h5>Custom Software Development</h5>
                                        <p>We build robust and scalable web apps that are custom made using rapid
                                            development processes leveraging the most cultured web technologies.</p>
                                        <a href="{{route('servicesShow','custom-software-development')}}"
                                           class="read-more"><img src="assets/img/more-grey.png"
                                                                  alt="Read Custom Software Development"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','search-engine-optimization')}}">
                                        <img src="{{asset('assets/img/search-engine-optimization.svg')}}"
                                             alt="Search Engine Optimization"
                                             class="service-image img-fluid">
                                        <h5>Search Engine optimization</h5>
                                        <p>At LAYALI BAHRAIN, we take care of all your business concerns regarding SEO
                                            and make sure that your website is coming on the first page of Google
                                            results.</p>
                                        <a href="{{route('servicesShow','search-engine-optimization')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read Search Engine Optimization"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="service">
                                    <a href="{{route('servicesShow','social-media-marketing')}}">
                                        <img src="{{asset('assets/img/social-media-marketing.svg')}}"
                                             alt="Social Media Marketing"
                                             class="service-image img-fluid">
                                        <h5>Social Media Marketing</h5>
                                        <p>Great marketing on social media can bring remarkable success to your
                                            business, creating devoted brand advocates and even driving leads and
                                            sales.</p>
                                        <a href="{{route('servicesShow','social-media-marketing')}}"
                                           class="read-more"><img src="{{asset('assets/img/more-grey.png')}}"
                                                                  alt="Read Social Media Marketing"
                                                                  class="img-fluid"></a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-clients">
            <!-- <div class="container">
                <h3>Few <span style="font-weight: bolder; font-size: 35px">Big Names</span> Our Team Members Associated
                    in the Past</h3>
                <div class="owl-carousel owl-theme clients">
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/microsoft.jpg')}}" alt="Microsoft"
                                            class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/google.png')}}" alt="Google" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/amazon.jpg')}}" alt="Amazon" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Colliers_Logo_v1.jpg')}}" alt="Colliers"
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Dell_logo.png')}}" alt="Dell"
                                            class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Flipkart.png')}}" alt="Flipkart" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/pumpkin-thumb.png')}}" alt="Pumpkin Kart"
                                            class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/kotakv1.jpeg')}}" alt="Kotak Bank"
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/ICICI_bank_logo.png')}}" alt="ICICI"
                                            class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Idea.jpg')}}" alt="Idea" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Intel.jpg')}}" alt="Intel" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/JLL.jpg')}}" alt="JLL" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/metricfox.jpg')}}" alt="Metricfox"
                                            class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Nissan.jpg')}}" alt="Nissan" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Pepsi.jpg')}}" alt="Pepsi" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/V-GAURD.png')}}" alt="Vguard"
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/walmart.jpg')}}" alt="Walmart"
                                            class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/Wipro-Icon-PNG-1024x1024.png')}}" alt="Wipro"
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client.jpg')}}" alt="ITR Group" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client1.jpg')}}" alt="XL Traction"
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client4.jpg')}}" alt="Strings and Beads"
                                            class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client5.jpg')}}" alt="Kasten"
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client6.jpg')}}" alt="Chai Hut" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client7.jpg')}}" alt="Futurefinserv"
                                            class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client8.jpg')}}" alt="Sybu" class="img-fluid"></a>
                        </div>
                        <div class="client">
                            <a href=""><img src="{{asset('assets/img/client9.jpg')}}" alt="Manukai"
                                            class="img-fluid"></a>
                        </div>
                    </div>

                </div>
            </div> -->
        </div>
            <!-- <div class="portfolios" data-aos="fade-up">
                <div class="container">
                    <h6>Portfolio</h6>
                    <div class="row">
                        <div class="col-sm-6 col-10">
                            <h3>Our Latest Projects</h3>
                        </div>
                        <div class="col-sm-6 col-2">
                            <a href="{{route('portfolio')}}" class="text-right view-all"><span>View All Projects</span></a>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme portfolio-slider">
                        @foreach($portfolios as $portfolio)
                            <div class="item">
                                <div class="portfolio">
                                    <a href="{{route('portfolio')}}" class="portfolio-image">
                                        <img src="{{asset($portfolio->photo)}}" alt="{{$portfolio->title}}"
                                            class="img-fluid">
                                    </a>
                                    <div class="portfolio-details">
                                        <h4><a href="{{route('portfolio')}}">{{$portfolio->title}}</a></h4>
                                        <a href="{{route('portfolio')}}" class="arrow"><img
                                                src="{{asset('assets/img/arrow.png')}}" alt="Arrow" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div> -->
        <!-- <div class="testimonials" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h5>Client Testimonials</h5>
                        <h6>See what people are saying about us.</h6>
                        <p>At LAYALI BAHRAIN, we consider the clients’ vision our utmost priority as we transform and
                            reflect it in the Digital space. We prioritize business needs at the center of all our work
                            and are constantly driven by results.</p>
                    </div>
                    <div class="col-sm-7">
                        <div class="owl-carousel owl-theme testimonial-slider">
                            @foreach($testimonials as $testimonial)
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="testimonial-comment">
                                            <span>{{$testimonial->description}}</span>
                                        </div>
                                        <div class="avatar">
                                            <div class="profile-image">
                                                <img src="{{asset($testimonial->profile_pic)}}" class="rounded-circle"
                                                     alt="{{$testimonial->name}}">
                                            </div>
                                            <div class="profile-info">
                                                <h5>{{$testimonial->name}}</h5>
                                                <h6>{{$testimonial->designation}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="slider-counter1"></div>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="news-and-articles" data-aos="fade-up">
            <h4>LAYALI BAHRAIN</h4>
            <h5>News and articles</h5>
            <div class="owl-carousel owl-theme news-articles">
                @foreach($posts as $post)
                    <div class="item">
                        <div class="block">
                            <a href="{{route('showBlog',$post->slug)}}" class="block-image">
                                <img src="{{$post->thumbnail}}" alt="" class="img-fluid">
                            </a>
                            <h6>{{ucwords(strtolower($post->title))}}</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span>{{date('M  d Y', strtotime($post->created_at))}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> -->
        <div class="locations" data-aos="fade-up">
            <div class="container">
                <img src="assets/img/location.png" alt="Company Location" class="img-fluid">
            </div>
        </div>
    </div>
 
@endsection
