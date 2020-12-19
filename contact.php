<?php
$header = 'sticky-top';
include 'includes/header.php';
?>
<!-- header content start  -->
<div id="header-banner">
    <div class="row">
        <div class="col-12 position-relative">
            <img src="assets/pictures/about-header-baner.png" alt="" class="img-fluid">
            <div class="row position-absolute top-0 w-100 h-100 text-center">
                <div class="col-md-4 mx-auto my-auto">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="row position-absolute w-100 justify-content-center">
                <div class="col d-flex justify-content-center">
                    <a href="#footer" id="tofooter" class="scroll-down-btn scroll-to"><i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header content end  -->
<!-- page content start  -->
<section id="contact-content" class="bg-light-gray">
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="location-bg mb-5">
                    <div class="row m-2 justify-content-between">
                        <div class="col-md-12 p-3">
                            <h2  class="my-md-4 my-2">LOCATE US</h2>
                            <p class="mb-0" style="font-size: 20px;">consulate General Of Lebanon in Dubai and the Northern Emirates</p>
                            <div class="pl-3">
                                <p class="mb-0"> Tel:<span> +97143977450</span></p>
                                <p class="mb-0">Fax:<span> +97143977450</span></p>
                                <p class="mb-0">Email :<span> info@Lebanonconsulate-uae.com</span></p>
                            </div>
                            <h2  class="mt-4 mb-2">CONSULATE TIMES</h2>
                            <p class="mb-0"> From Sunday Till Thursday</p>
                            <p class="mb-0">Submitting Time From 09:00 Until 12:00pm</p>
                            <p class="mb-0">Collection Time From 13:00 Until 13:00pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 px-2 py-4">
                            <iframe width="100%" height="100%" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" style="border:0" allowfullscreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="side-sec">
                <div class="row">
                    <div class="col-12">
                        <h2><span>tags</span></h2>
                        <a href="#" class="btn btn-outline-primary">luxury</a>
                        <a href="#" class="btn btn-outline-primary">luxury yacht</a>
                        <a href="#" class="btn btn-outline-primary">Fishing Boat</a>
                        <a href="#" class="btn btn-outline-primary">Out-board</a>
                        <a href="#" class="btn btn-outline-primary">Console</a>
                    </div>
                </div>
                <?php include 'includes/send-message.php'; ?>
                <div class="container">
                    <div class="row mt-5" id="subscribe">
                        <div class="col-12  bg-white p-md-5 p-2">
                            <h2>stay updated</h2>
                            <p class="py-3">Subscribe to our mailing
                                list to saty updated with
                                the latest boats and news
                            </p>
                            <div class="form-group">
                                    <input type="text" name="" id="" class="form-control" placeholder="email">
                                </div>
                            <div class="form-group">
                                <input type="submit" name="" id="" class="btn btn-primary btn-block" value="subscribe">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page content end  -->
<?php include 'includes/footer.php'; ?>