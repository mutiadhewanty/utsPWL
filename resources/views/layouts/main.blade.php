<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('style/fontawesome/css/all.min.css')}}"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/templatemo-video-catalog.css')}}">
    <title>Mutia BLog | {{ $tittle }} </title>
<!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <!-- <div class="col-7 col-md-4">
                            <a href="index.html" class="tm-bg-black text-center tm-logo-container">
                                <i class="fas fa-video tm-site-logo mb-3"></i>
                                <h1 class="tm-site-name">Video Catalog</h1>
                            </a>
                        </div> -->
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                            @include('partials.navbar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <p class="tm-welcome-text mb-1 text-white"> <div class="container mt-4">
                        
                    </div></p>
 
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                        <source src="{{asset('style/video/food.mp4')}}" type="video/mp4">
                </video>    
            </div>
            
            <main>
            <div class="row">
                        <div class="col-12">
                            <h1 class="tm-page-title mb-4">@yield('container')</h1>
                            <div class="tm-categories-container mb-5">
                                <h3 class="tm-text-primary tm-categories-text"></h3>
                                <ul class="nav tm-category-list">
                                    <li class="nav-item tm-category-item"></li>
                                    
                                </ul>
                            </div>        
                        </div>
                    </div>
            </main>
                
                    
            <i id="tm-video-control-button" class="fas fa-pause"></i>
        </div>
        
    <script src="{{asset('style/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.min.js')}}"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            let windowWidth = window.innerWidth;
            let newVidWidth = windowWidth;
            let newVidHeight = windowWidth * vidHeight / vidWidth;
            let marginLeft = 0;
            let marginTop = 0;

            if (newVidHeight < 500) {
                newVidHeight = 500;
                newVidWidth = newVidHeight * vidWidth / vidHeight;
            }

            if(newVidWidth > windowWidth) {
                marginLeft = -((newVidWidth - windowWidth) / 2);
            }

            if(newVidHeight > 720) {
                marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
            }

            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
            tmVideo.css('margin-left', marginLeft);
            tmVideo.css('margin-top', marginTop);
        }

        $(document).ready(function () {
            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        })
    </script>
 

   
    
</body>

</html>