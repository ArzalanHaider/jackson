<?php
include_once('header.php');
?>

    <!-- section banner -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center ">
                
                <div class="col-lg-6 col-md-6">
                    <div class="hero-content">
                        <div class="text-img">
                            <h1>Contact us</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="hero-img img-box-content"><img src="images/TheJourneyHome.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- End section -->

    <section class="contact-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="bg-contact-form">
                    <h2>Contact form for inquiries</h2>
                    <!--<form method="POST" action="signup" class="needs-validation" novalidate="">-->
                        <form method="POST" action="signup">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Name" pattern="[A-Za-z ]+" name="name" required="">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required="">
                                </div>
                                <div class="mb-3">
                                    <input type="number" class="form-control" placeholder="Enter Contact No." name="phone" onkeypress="if(this.value.length==12) return false;" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="mb-3">
                                    <textarea class="form-control model-textarea" onkeypress="if(this.value.length==250) return false;" name="desc" rows="4" cols="50" placeholder="Enter Message" required=""></textarea>
                                </div>
                                <div class="mb-0">
                                    <button type="submit" class="btn btn-theme mt-1">Submit</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <?php
include_once('footer.php');
?>