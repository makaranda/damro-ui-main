
<section class="footer-top-area">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-sm-6 col-md-5 col-lg-3 footer-icon-area">
                <i class="bi bi-telephone footer-social-icons"></i> <span class="footer-text">Customer Care:</span><a href="tel:0334678678" class="footer-text">033 4 678 678</a>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-lg-3 footer-icon-area">
                <i class="bi bi-envelope footer-social-icons"></i><a href="mailto:customercare@damro.lk" class="footer-text">customercare@damro.lk</a>
            </div>
      
        </div>
    </div>
</section>
<section class="footer-bottom-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <p class="pb-0 mb-0 footer-copyright-area">Copyright © <?php echo date('Y');?> www.damro.lk All rights reserved</p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>


<script>
$(document).ready(function(){
    
    $(document).scroll(function () {
        var scroll = $(this).scrollTop();
        var topDist = $("#main-page").position();
        //alert(scroll+'/'+topDist.top);
        if (scroll > topDist.top) {
            //$('#mainNavArea').css({"position":"fixed","top":"0","z-index":"99","width": "100%","background-color": "#fff"});
            $('#mainNavArea').addClass('nav-sticky');
        } else {
            //$('#mainNavArea').css({"position":"relative","top":"auto","z-index":"99"});
            $('#mainNavArea').removeClass('nav-sticky');
        }
    });

    $('.btn-toggle-mobile').on('click',function(){
        $(this).addClass("d-none");
        $('.btn-close-area').removeClass("d-none");
        $('.btn-close-area').addClass("d-block");
    });

    $('.btn-close-area').on('click',function(){
        $(this).removeClass("d-block");
        $('.btn-toggle-mobile').addClass("d-block");
        $('.btn-toggle-mobile').removeClass("d-none");
        $('.btn-close-area').addClass("d-none");
    });


    /*const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 2000,
    touch: false
    });
    */

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        dots: false,
        nav: true,
        navElement: true,
        autoplayTimeout:5000,
        pagination: false,
        autoplayHoverPause:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                loop:true
            }
        }
    });

});
</script>
</body>
</html>