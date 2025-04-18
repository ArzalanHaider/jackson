<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

<!-- bootstrap 5.1 -->
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Style css -->
<link rel="stylesheet" href="css/style.css">
<!-- Responsive css -->
<link rel="stylesheet" href="css/responsive.css">
<!-- AOS Animation -->
<link rel="stylesheet" href="css/aos.css">
<!-- Slick Carousel -->
<link rel="stylesheet" href="css/slick.min.css">
<link rel="stylesheet" href="css/slick-theme.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>
    <!-- header -->
    <header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="header-top-main d-md-block d-none">
            <div class="container">
                <div class="header-top">
                    <div class="social-media">
                        
                        <a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true" target="_blank"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-linkedin" aria-hidden="true" target="_blank"></i></a>
                        
                    </div>
                    <div class="header-mail-main">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-bottom">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-main " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="<?php echo basename($_SERVER['REQUEST_URI'])=='index.php'? 'nav-link active':'nav-link';?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php echo basename($_SERVER['REQUEST_URI'])=='author-info.php'? 'nav-link active':'nav-link';?> " href="author-info.php">Author's Intro</a>
                        </li>

                        <li class="nav-item">
                            <a class="<?php echo basename($_SERVER['REQUEST_URI'])=='book.php'? 'nav-link active':'nav-link';?> " href="book.php">
                                Books
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="<?php echo basename($_SERVER['REQUEST_URI'])=='contact-us.php'? 'nav-link active':'nav-link';?> " href="contact-us.php">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                    <div class="my-2 my-lg-0 d-xl-block d-none">
                     <a href="https://www.amazon.com/dp/B0DYBR6YD5?ref=cm_sw_r_ffobk_cp_ud_dp_CBFHBSNDCKFWTAJ1Z5CS&ref_=cm_sw_r_ffobk_cp_ud_dp_CBFHBSNDCKFWTAJ1Z5CS&social_share=cm_sw_r_ffobk_cp_ud_dp_CBFHBSNDCKFWTAJ1Z5CS&bestFormat=true&previewDoh=1" target="_blank" class="btn btn-theme"><i class="fa fa-amazon"></i> Order Now
                        </a>
                    </div>
                    <div class="my-2 my-lg-0 d-xl-block d-none barnesandnobleLogomyclass">
                     <a href="https://www.barnesandnoble.com/w/the-shadow-of-ging-pei-ronald-jackson/1147058816" target="_blank" class="btn btn-theme"><img src="images/barnesandnoble.png"></i> Order Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- popup -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md model-sec">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="model-discount">
                            <div class="d-block text-center align-items-center">
                                <div class="animate-div"><span>Order Your Book</span></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <hr>
                            <form method="POST" action="signup.php" class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control model-input" placeholder="Enter Name" pattern="[A-Za-z ]+" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control model-input" placeholder="Enter Email" name="email" pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Contact No.</label>
                                            <input type="number" class="form-control model-input" placeholder="Enter Contact No." name="phone" onkeypress="if(this.value.length==12) return false;" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn btn-theme mt-1 w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->    <!-- End header -->