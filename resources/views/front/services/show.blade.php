@extends('front.layouts.app')
@if($service->slug=='it-consulting')
@section('title','Best IT consultant in Toronto | IT Consulting Services GTA')
@section('description','We are the top IT consulting Service provider in Toronto. If you want to redefine your current Online Strategy or need to start from scratch, contact MTS now.')
@section('keywords','IT consulting in Toronto,IT consulting company,IT Consulting service provider,toronto IT consultant,IT consulting agency,web designer,website design toronto,web designers,digital marketing services,marketing toronto,digital media agency toronto,digital marketing agencies in toronto')
@section('canonical','https://LAYALI BAHRAIN.com/services/it-consulting')
@endif
@if($service->slug=='branding')
@section('title','Best Branding Service in Toronto | Logo Design and Branding')
@section('description','Branding, is the process of building an identity that will become the foundation for the future of your business. MTS will create a memorable identity for you.')
@section('keywords','Branding company,Branding services,Branding services toronto,Branding companies toronto,Branding agency,Branding agencies toronto,web design agency toronto,toronto website design company,toronto online marketing,toronto digital agency,marketing firms in toronto,digital agencies toronto')
@section('canonical','https://LAYALI BAHRAIN.com/services/branding')
@endif
@if($service->slug=='digital-marketing')
@section('title','Best Digital Marketing Agency in Toronto | Email Marketing')
@section('description','We focus on delivering Top quality Digital Marketing Services, based on a personalized approach and build successful Ad campaigns to boost your sales.')
@section('keywords','Digital marketing services toronto,Digital marketing service providers toronto,Digital marketing toronto,Digital marketing company toronto,Digital marketing agency toronto,Toronto digital marketing,marketing firm toronto,toronto digital marketing agencies,marketing agencies in toronto,online marketing agencytoronto marketing firms,toronto marketing')
@section('canonical','https://LAYALI BAHRAIN.com/services/digital-marketing')
@endif
@if($service->slug=='social-media-marketing')
@section('title','Social Media Marketing Toronto | Top Online Marketing Agency')
@section('description','Our specialized Social Media Marketing team know the pulse of the market, who can grab more eyeballs online, and bring remarkable success to your business. ')
@section('keywords','Social media marketing toronto,Social media marketing services toronto,SMM toronto,SMM services toronto,SMM agencies,SMM companies in toronto,web marketing services,Social media marketing agencies,content marketing agency toronto,top marketing agencies toronto,digital agencies in toronto,toronto digital agencies')
@section('canonical','https://LAYALI BAHRAIN.com/services/social-media-marketing')
@endif
@if($service->slug=='search-engine-optimization')
@section('title','Best SEO Company Toronto | Search Engine Optimization | MTS')
@section('description','At LAYALI BAHRAIN, we take care of all your business concerns regarding SEO and make sure that your Website appears on the first page of Google results.')
@section('keywords','Seo company in toronto,Best seo company in toronto,Top seo company in toronto,Best seo agency in toronto,Seo services toronto,Search engine optimization agency,Search engine optimization company,Best seo,marketing plan toronto,digital advertising agencies toronto,web marketing toronto,marketing services toronto')
@section('canonical','https://LAYALI BAHRAIN.com/services/search-engine-optimization')
@endif
@if($service->slug=='website-design-and-development')
@section('title','Website Design & Web Development | Custom Web Design Toronto')
@section('description','Websites play a crucial role in shaping your Brand. So, we always strive to design a unique theme that reflects the attributes associated with your business.')
@section('keywords','website designing company toronto,Web designing company in toronto,Web designing agency in toronto,Best web designing company in toronto,Best web designing agency in toronto,Toronto web designing company,Top web designing company in toronto,Web design and development company,Web designing and development agency,online marketing solutions,marketing firm,online marketing services')
@section('canonical','https://LAYALI BAHRAIN.com/services/website-design-and-development')
@endif
@if($service->slug=='android-and-ios-development')
@section('title','Best Mobile Application Design & Development agency Toronto')
@section('description','If you have a vision for IOS or Android Mobile Application, we can make that a reality! Our solutions are tailor made and it suits the world of agile needs.')
@section('keywords','App development company in toronto,Mobile app development company,Best mobile app development company,Top mobile app development company,Android app development company,IOS app development company,Android app development in Toronto,IOS app development in Toronto,free business advertising toronto,internet marketing firm,Best IT consulting firms in Toronto,Best IT consulting Companies in Toronto')
@section('canonical','https://LAYALI BAHRAIN.com/services/android-and-ios-development')
@endif
@if($service->slug=='custom-software-development')
@section('title','Custom Software Development in Toronto | Software Consulting')
@section('description','We assist small business or large organization to integrate custom software into the processes of a business to optimize efficiency and minimize labor or costs.')
@section('keywords','Software development in toronto,Software development company in toronto,Best software development company in toronto,Top software development company in toronto,Custom software development in toronto,Customized software development in toronto,Best IT consulting firms in Canada,Best IT consulting Companies in Canada,Best IT consultant in Canada,Top IT consultant in Canada,IT consultant service Canada,Best IT consultant service Canada')
@section('canonical','https://LAYALI BAHRAIN.com/services/custom-software-development')
@endif
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('content')
    <div class="service-detail-page page">
        <div class="banner-common">
            <div class="container">
                <h1>SERVICES</h1>
            </div>
        </div>
        <div class="container">
            <div class="service-detail-inner" data-aos="fade-up">
                <div class="row">
                    <div class="col-sm-8">
                        <h5>{{$service->name}}</h5>
                        <p>{!! $service->description !!} </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="quick-nav">
                            <ul>
                                <li class= "{{$service->slug =='it-consulting' ? 'active' : ''}}"><a href="{{route('servicesShow','it-consulting')}}">IT Consulting</a></li>
                                <li class= "{{$service->slug =='branding' ? 'active' : ''}}"><a href="{{route('servicesShow','branding')}}">Branding</a></li>
                                <li class= "{{$service->slug =='digital-marketing' ? 'active' : ''}}"><a href="{{route('servicesShow','digital-marketing')}}">Digital Marketing</a></li>
                                <li class= "{{$service->slug =='social-media-marketing' ? 'active' : ''}}"><a href="{{route('servicesShow','social-media-marketing')}}">Social Media Marketing</a></li>
                                <li class= "{{$service->slug =='search-engine-optimization' ? 'active' : ''}}"><a href="{{route('servicesShow','search-engine-optimization')}}">Search Engine Optimization</a></li>
                                <li class= "{{$service->slug =='website-design-and-development' ? 'active' : ''}}"><a href="{{route('servicesShow','website-design-and-development')}}">Website Development & Web Design</a></li>
                                <li class= "{{$service->slug =='android-and-ios-development' ? 'active' : ''}}"><a href="{{route('servicesShow','android-and-ios-development')}}">Android And Ios Development</a></li>
                                <li class= "{{$service->slug =='custom-software-development' ? 'active' : ''}}"><a href="{{route('servicesShow','custom-software-development')}}">Custom Software Development</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
