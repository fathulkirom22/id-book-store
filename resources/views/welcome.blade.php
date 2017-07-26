<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">
        <style>
            html {
                position: relative;
                min-height: 100%;
            }
            .carousel-fade .carousel-inner .item {
                opacity: 0;
                transition-property: opacity;
            }
            .carousel-fade .carousel-inner .active {
                opacity: 1;
            }
            .carousel-fade .carousel-inner .active.left,
            .carousel-fade .carousel-inner .active.right {
                left: 0;
                opacity: 0;
                z-index: 1;
            }
            .carousel-fade .carousel-inner .next.left,
            .carousel-fade .carousel-inner .prev.right {
                opacity: 1;
            }
            .carousel-fade .carousel-control {
                z-index: 2;
            }
            @media all and (transform-3d),
            (-webkit-transform-3d) {
                .carousel-fade .carousel-inner > .item.next,
                .carousel-fade .carousel-inner > .item.active.right {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
                .carousel-fade .carousel-inner > .item.prev,
                .carousel-fade .carousel-inner > .item.active.left {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
                .carousel-fade .carousel-inner > .item.next.left,
                .carousel-fade .carousel-inner > .item.prev.right,
                .carousel-fade .carousel-inner > .item.active {
                    opacity: 1;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            }
            .item:nth-child(1) {
                background: url({!! URL::asset('img/bener4.jpg') !!}) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .item:nth-child(2) {
                background: url({!! URL::asset('img/bener3.jpg') !!}) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .item:nth-child(3) {
                background: url({!! URL::asset('img/bener6.jpg') !!}) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .carousel {
                z-index: -99;
            }
            .carousel .item {
                position: fixed;
                width: 100%;
                height: 100%;
            }
            .title {
                text-align: center;
                margin-top: 20px;
                padding: 10px;
                text-shadow: 2px 2px #000;
                color: #FFF;
            }

            .mainPitch-content{
                align: center;
                align-items: center;
                display: flex;
                justify-content: center;
                color: white;
            }

            .background-link{
                background: black;
                opacity: 0.6;
                border-radius: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .mainPitch{
                position: absolute;
                top: 20px;
                width: 100%;
            }

            .img-logo{
                margin-top: 10%;
                height: auto;
                weight: auto;
            }

            .container {
                height: 600px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body background="">
        <div class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                </div>
                <div class="item">
                </div>
                <div class="item">
                </div>
            </div>
        </div>

        {{-- main pitch --}}
        <div class="mainPitch" style="">
            @component('layouts.welcome')
            @endcomponent
        </div>
       
        <!-- Scripts -->
        <script src="{{ URL::asset('js/app.js')}}"></script>
        <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
        <script>
            $('.carousel').carousel();
        </script>
    </body>
</html>
