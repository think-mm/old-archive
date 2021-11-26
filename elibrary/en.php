<?php $lang="en"; $bnLink = "index.php"; $title="E-Library | MuktoMona"; include("header.php"); ?>

        <section id="slider" class="slider-parallax" style="background-color: #222;">

            <div id="oc-slider" class="owl-carousel">
                <a href="ancient.php"><img src="images/ancient.jpg" alt="Slider"></a>
                <a href="medieval.php"><img src="images/medieval.jpg" alt="Slider"></a>
                <a href="renaissance.php"><img src="images/renaissance.jpg" alt="Slider"></a>
                <a href="early-modern.php"><img src="images/early-modern.jpg" alt="Slider"></a>
                <a href="modern.php"><img src="images/modern.jpg" alt="Slider"></a>
            </div>

            <script>
            jQuery(document).ready(function($) {
                var ocSlider = $("#oc-slider");
                ocSlider.owlCarousel({
                    items: 1,
                    nav: true,
                    navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                    animateOut: 'rollOut',
                    animateIn: 'rollIn',
                    smartSpeed: 450,
                    autoplay: false,
                    loop: true
                });
            });
            </script>

        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap" >

<?php include("footer.php"); ?>
