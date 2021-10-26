<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
<main>
        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                        
                            <div class="tm-categories-container mb-5">
                                <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                                <ul class="nav tm-category-list">
                                    <li class="nav-item tm-category-item"><a href="/" class="nav-link tm-category-link active">All</a></li>
                                    
                                </ul>
                            </div>        
                        </div>
                    </div>
                   
                    <div class="row tm-catalog-item-list">
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{asset('style/img/baso.jpg')}}" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="/gmaps " class="position-absolute tm-img-overlay"></a>    
                            </div>
                            
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                @yield('menu1')
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{asset('style/img/basoBakar.jpg')}}" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                @yield('menu2')
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{asset('style/img/rawon.jpg')}}" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                @yield('menu3')
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{asset('style/img/buryam.jpg')}}" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                @yield('menu4')
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{asset('style/img/pecel.jpg')}}" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                @yield('menu5')
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="{{asset('style/img/sate.jpg')}}" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                @yield('menu6')
                                
                            </div>
                        </div>
                        
                    <!-- Catalog Paging Buttons -->
                    <div>
                        <ul class="nav tm-paging-links">
                            <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
                        </ul>
                    </div>
                </main>
                @include('partials.footer')
</body>

</html>