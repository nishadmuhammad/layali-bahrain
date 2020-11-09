
@extends('front.layouts.app')
@section('title', 'Best Web Designing Company in Toronto | Creative Web Designs')
@section('description','Maple Tech Space - Best Web designing company in Toronto. We build creative and customized web designs for a visually appealing online presence of your business.')
@section('keywords','toronto seo experts,seo agency toronto,best seo toronto,toronto seo specialist,website designers toronto,web design companies toronto,website development toronto,web designers toronto,best digital marketing agency in GTA,digital agency toronto,internet marketing agency toronto,toronto internet marketing')
@section('ogImage','')
@section('navClass','inner')
@section('logo'){{asset('assets/img/logo-inner.png')}}@endsection
@section('canonical','https://www.mapletechspace.com/portfolio')
@section('content')
    <div class="portfolio page">
        <div class="banner-common">
            <div class="container">
                <h1>Portfolio</h1>
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


                        <div class="col-sm-12">
                   @foreach($portfolios as $portfolio)
                    <p>{{$portfolio->photo}}</p>
                    <h6>{{$portfolio->title}}</h6>
                    <p>{{$portfolio->description}}</p>
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset($portfolio->photo)}}" alt="manukaii" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>{{$portfolio->title}}</h6>
                                <p>{{$portfolio->description}}</p>
                            </div>
                        </div>
                    </div>
                   @endforeach



                 <!-- </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/pumkin-kart-project.png')}}" alt="pumkin kart project" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Digital Marketing- Pumpkin Kart</h6>
                                <p>Digital Marketing is the powerhouse of every business. Our client, Pumpkin Kart, partnered with us to boost their Social media and Digital Marketing presence to showcase their USP of "Delivering Happiness". By following a funnel based approach to optimize app downloads, Maple Tech Space worked closely with the client for promoting their virtual Biriyani campaign(Aug 2020). The strategy, content, design and execution have been successfully completed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/sybumock.png')}}" alt="sybu" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Sybu Mathew</h6>
                                <p>“Credibility , Trust, Reliability - the Reality about Realty.” Our website design for Realtor, Sybu Mathew Real Estate has been custom designed to showcase these core values.<br>
                                    Take a look for yourself : <a target="_blank" href="https://www.sybumathew.com">www.sybumathew.com</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/neenamock.png')}}" alt="neena" class="img-fluid">
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
                                    <img src="{{asset('assets/img/manukaiimock.png')}}" alt="manukaii" class="img-fluid">
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
                                    <img src="{{asset('assets/img/ecom.png')}}" alt="ecom" class="img-fluid">
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
                                    <img src="{{asset('assets/img/sportz999mock.png')}}" alt="sportz999" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Sportz999</h6>
                                <p>“Creativity is inventing, growing, taking risks and having fun”, very similar to the amazing world of Sports. For all the Sports buffs out there, click on <a target="_blank" href="https://www.sportz999.com">www.sportz999.com</a> to get your dose of Sports stories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/babitamock.png')}}" alt="babita" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Babita Gupta</h6>
                                <p>“Our job is to take small ideas and build on them to make it tangible and unique””. The Website done for Realtor, Ms Babitha Gupta was to highlight the awe-inspiring work done by our client.</p><a href="http://condosbybabita.com/">www.condosbybabita.com/</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/stringsandbeadsmock.png')}}" alt="stringsandbeeds" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Strings and Beads</h6>
                                <p>“Design brings content to focus and design makes function visible”.
                                    This sums up the concept used for designing the website for our UAE based client, “Strings and Beads” who specialize in selling innovative products of healing jewellery. <br/>Click here: <a target="_blank" href="http://www.stringsandbeads.com">www.stringsandbeads.com</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/foxlegum.png')}}" alt="foster" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Foxlegum</h6>
                                <p>Your website is the center of your digital eco-system, like a brick and mortar location - the customer experience matters !! " Website done for our clientFox Legum, leading provider of the most flexible and upgradeable ERP and Business solutions on the market today. <br><a href="http://foxlegum.com/">www.foxlegum.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/chaihutmock.png')}}" alt="chaihut" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Chaihut</h6>
                                <p>A website should be like the visiting card, leading users to the front door of  a Business. This was the concept while designing for our client, <a href="https://www.chaihut.in/">www.chaihut.in</a>  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/redbuy.png')}}" alt="stringsandbeeds" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>RedBuyers</h6>
                                <p align="justify"><a target="_blank" href="http://www.RedBuyers.com">www.RedBuyers.com</a>
                                    is a revolutionary website that offers a progressive way of selling your home in Canada, by just clicking a button, while being seated on your couch!
                                    Our team has worked tirelessly to go that extra mile to execute the client’s vision of interposing technology with a contemporary approach for buying and selling homes whilst keeping it simple and fun for the customer.
                                     </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/sudheer.jpeg')}}" alt="foster" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-block-details">
                                <h6>Sudheer Portifolio</h6>
                                <p align="justify"><a href="http://www.sudheer.ca" target="_blank">www.sudheer.ca</a> is a Maple Tech Space customized portfolio website for our client who is an Agile and Business process management professional , transformation consultant, soccer lover, car & motorcycle enthusiast, and Paulo Coelho fan.

                                    Our team effectively collaborated with working from remote locations for this website design for our valued client. It has been successfully executed by keeping the client's vision intact.
                                    <br>Please check it out on <a href="http://www.sudheer.ca" target="_blank">www.sudheer.ca</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-block" data-aos="fade-up">
                            <div class="portfolio-image">
                                <a href="">
                                    <img src="{{asset('assets/img/jp.png')}}" alt="foster" class="img-fluid">
                                </a>
                            </div> -->
                            <div class="portfolio-block-details">
                                <h6>J.P. Singh Masaun Broker</h6>
                                <p align="justify">Our designers and web developers have executed a contemporary website with a modernistic feel, for our charismatic client , who is the  “creme de la creme” amongst realtors in Canada.  <a href="https://www.jpsinghmasaun.com/" target="_blank">https://www.jpsinghmasaun.com/</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
