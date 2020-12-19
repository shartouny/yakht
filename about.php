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
                    <h1>about us</h1>
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
<!-- about section start  -->
    <section id="about-content-section" class="bg-light-gray pt-5">
        <div class="container position-relative">
            <h1>About Yachtvision</h1>
            <div class="row mt-lg-4">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-12">
                            <h2>where vision <br> <span>becomes reality</span></h2>
                            <p class="m-md-0">Established in 2008, by Captain Roger Daou, after 20 years in the boat industry. <br> <br>

                                Yacht vision is a brokerage/manufacturer representative firm, specialised in selling and servicing small to mega yachts ranging from 5m (15 ft) to 100m (300ft) <br> <br>

                                Yacht vision is the first choice for clients where luxury meets affordability. <br> <br>

                                Our mission: <br>
                                Is to respect our clients and to provide them with a professional Yacht sale and after sale services. We make sure that our services exceed our Client’s expectations. <br> <br>

                                Our vision: <br>
                                Is looking to be trusted to deliver excellence, matched with the Power and courage of innovation, it is what we inspire to become. <br> <br>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5 mb-lg-0 ">
                        <div class="col-12 p-lg-0">
                            <div class="container p-lg-3">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8 p-lg-0">
                                        <img src="assets\pictures\experince-about.png" alt="" class="w-100 position-relative">
                                        <div class=" bg-dark-blue position-absolute top-0 left-0 w-100 h-100 text-center p-5 justify-content-center d-flex"></img>
                                            <h2>more than <br> <span class="text-white">10 years EXPERIENCE</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-lg-0">
                    <img src="assets\pictures\about-content.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- about section end  -->
    <!-- latest news section start  -->
    <div class="mb-md-5 mb-3">
        <?php include 'includes/latest-news.php'; ?>
    </div>
    <!-- latest news section end  -->
<!-- page content end  -->
<?php include 'includes/footer.php'; ?>