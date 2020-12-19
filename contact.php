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
<section id="contact-sec" class="bg-light-gray">
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="row m-2 justify-content-between">
                    <div class="col-md-12">
                        <h2 class="text-left">LOCATE US</h2>
                        <table class="w-100 " id="contact-info-table">
                                <tr>
                                    <td>
                                        <p>Address : </p>
                                    </td>
                                    <td>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id reprehenderit debitis adipisci aspernatur expedita exercitationem sequi eligendi similique quis magni!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Tel : </p>
                                    </td>
                                    <td>
                                        <p>+961 9 22 59 70</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>mob : </p>
                                    </td>
                                    <td>
                                        <p>+961 3 25 00 70</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Email : </p>
                                    </td>
                                    <td>
                                        <p>info@yacht-vision.com</p>
                                    </td>
                                </tr>
                               
                            </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 px-2 py-4">
                        <iframe width="100%" height="100%" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" style="border:0" allowfullscreen="true"></iframe>
                    </div>
                </div>
                <hr class="d-md-none">
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
                <div class="row my-5">
                    <div class="col-12">
                        <h2><span>send message</span></h2>
                        <form action="" id="send-message">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control" placeholder="subject">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="" id="" class="form-control" placeholder="message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="" id="" class="btn btn-secondary btn-block" value="send">
                            </div>
                        </form>
                    </div>
                </div>
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
</section><!-- page content end  -->
<?php include 'includes/footer.php'; ?>