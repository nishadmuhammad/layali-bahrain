<!DOCTYPE html>
<html lang="en">
<head>
    <title>LAYALI BAHRAIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    <!--    slider-price-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>


<div class="gallery page">
    <div class="gallery-inner">
        <div class="container">
            <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div align="center" class="filter-buttons">
                        <button class="btn btn-default filter-button active" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="real-estate">Real estate</button>
                        <button class="btn btn-default filter-button" data-filter="mortgage">Mortgage</button>
                        <button class="btn btn-default filter-button" data-filter="handy-man-services">Handy man services
                
                        <button class="btn btn-default filter-button" data-filter="car-rentals">Car Rentals
                        <button class="btn btn-default filter-button" data-filter="restaurants">Restaurants
                        </button>
                        <button class="btn btn-default filter-button" data-filter="events">Events
                        <button class="btn btn-default filter-button" data-filter="miscellaneous">Miscellaneous
                        <button class="btn btn-default filter-button" data-filter="realtor">Realtor
                        <button class="btn btn-default filter-button" data-filter="advertisment">Advertisment
                        </button>
                    </div>
                </div>


                <div class="clearfix"></div>

                @foreach($flayers as $flayer)
                <div class="gallery_product col-lg-4 col-md-6 col-sm-4 col-xs-6 filter {{$flayer->type}}">
                    <a class="popup-link" data-fancybox=" {{$flayer->type}}" href="{{asset($flayer->photo)}}">
                    <img src="{{asset($flayer->photo)}}" alt="" class="img-fluid">
                    </a>
                </div>
                @endforeach


            </div>
        </div>

    </div>
    <script>
        $(document).ready(function () {

            $(".filter-button").click(function () {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                } else {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.' + value).hide('1000');
                    $('.filter').filter('.' + value).show('1000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });
    </script>
</div>


</body>
</html>
