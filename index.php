<?php
    include('includes/header.php');
?>

<div class="container mt-3" id="main-page">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div id="myCarouselElement" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="assets/images/sliders/Web-Slider.jpg" class="d-block w-100" alt="slider 1">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/images/sliders/Revoli-min.jpg" class="d-block w-100" alt="slider 2">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/sliders/ket09-min.jpg" class="d-block w-100" alt="slider 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>          
        </div>
        <div class="col-12 col-md-12 mt-4">
            <div class="row justify-content-center">
                <div class="col-4 col-md-3">
                    <img src="assets/images/online-Web-tag-Edit.jpg" class="img-fluid hvr-grow cursor-pointer"/>
                </div>
                <div class="col-4 col-md-3">
                    <img src="assets/images/Credit-card-offers.jpg" class="img-fluid hvr-grow cursor-pointer"/>
                </div>
                <div class="col-4 col-md-3">
                    <img src="assets/images/budget.jpg" class="img-fluid hvr-grow cursor-pointer"/>
                </div>
                <div class="col-4 col-md-3 d-none d-sm-none d-md-block">
                    <div id="fb-root"></div>
                    <div class="fb-page"
                    data-href="https://www.facebook.com/DamroSriLanka" 
                    data-height="161"
                    data-hide-cover="false"
                    data-show-facepile="true"></div>
                   
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 mt-4 mb-4">
            <div class="home-demo partners-list">
                <div class="row">
                    <div class="large-12 columns">                  
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="assets/images/partners/damrologo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/panasoniclogo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/samsunglogo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/hisenselogo.png" alt="" class="img-fluid"/>   
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/preethilogo.png" alt="" class="img-fluid"/> 
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/jacklogo.png" alt="" class="img-fluid"/>
                            </div>
                            <div class="item">
                                <img src="assets/images/partners/innovex-logo-min.png" alt="" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php
    include('includes/footer.php');
?>   