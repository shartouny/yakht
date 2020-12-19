<?php
$header = 'sticky-top';
include 'includes/header.php';
?>
<!-- header content start  -->

<div id="news-header-banner">
    <div class="row text-center my-md-5 my-2">
        <div class="col-12 ">
            <h1>news title</h1>
        </div>
    </div>
</div>
</div>

<!-- header content end  -->
<!-- page content start  -->
<!-- products-detail section start  -->
<section id="news-content-section" class="bg-light-gray pt-5">
    <div class="container">
        <div id="slider" class="py-md-5 py-2">
            <div class="row">
                <div class="col-12 text-right">
                    <div class="center">
                        <a href=# id="prev"><i class="fa fa-chevron-left"></i></a>
                        <a href=# id="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-prev="#prev" data-cycle-next="#next">
                        <img class="img-fluid" src="assets\pictures\boat-slider1.png">
                        <img class="img-fluid" src="assets\pictures\boat-slider2.png">
                        <img class="img-fluid" src="assets\pictures\01-Absolute-Yachts-62-FLY.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="container py-4">
                    <h2 class="py-2">news title</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volupta tem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                
                <div class="container py-4">
                    <h2 class="py-2">additional news image</h2>
                    <div class="row">
                        <div class="col-12">
                            <img src="assets\pictures\layout.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="container py-4 mb-5">
                    <h2 class="py-2">news video</h2>
                    <div class="row">
                        <div class="col-12">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/tg47p-w5uNI?start=20" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-100"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="side-sec">
                <div class="row mt-n5">
                    <div class="col-12">
                        <?php include 'includes/send-message.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page content end  -->
<?php include 'includes/footer.php'; ?>