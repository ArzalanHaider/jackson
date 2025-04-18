<?php
include_once('header.php');
?>
    <!-- section banner -->
    <section class="hero-section author-sec" id="home">
        <div class="container">
            <div class="row align-items-center ">
                
                <div class="col-lg-6 col-md-6">
                    <div class="hero-content">
                        <!--<img class="dragon-img animate-up " src="assets/images/dragon-img.png" alt="">-->
                        <h4>Hello, i'm</h4>
                        <div class="text-img">
                        
                            <h1>
                                Ronald Jackson</h1>
                        </div>
                        
                        <!--<a data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-theme">-->
                        <!--    Order Now-->
                        <!--</a>-->
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- End section -->
    
    <section class="about-author">
        <div class="container">
            <div class="author-bg">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4">
                        <div class="about-left">
                            <img src="images/default-img.jpg" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-right">
                            <span>About Author</span>
                            <h2>Ronald Jackson</h2>
                            <p>
                               Ronald Jackson is a lifelong educator. He graduated from the University of North Texas with a bachelor’s degree in business administration in 1988. He later earned a master’s degree in educational administration from Texas A&M University in 1999. After completing these two degrees, he also earned an MBA and a Ph.D in 2001. With an additional degree in creative writing the following year, he began careers in both education and book writing.
                            </p>
                            <p>
                                During the following years, he has been a teacher, an administrator, a college professor, a professional writer, a curriculum developer, and the author of several published novels. After temporarily retiring from a career in education, he now spends his time traveling, doing research, writing, and tutoring both children and adults in technical professions. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--sec-five-->
    <section class="sec-five">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                     <div class="sec-01-heading">
                        <h4>Why Read a Book on Personal Branding?</h4>
                        <p>I wanted this book to be as useful as possible. It will especially come in handy for those who are engaged in business and marketing:</p>
                    </div>
                </div>
                 <div class="col-lg-6">
                      <div class="sec-01-heading">
                        <p>The book is sold in most online and offline bookstores in the USA. Still, if you want to receive your copy with my autograph, you can order it right on this website or contact me directly.</p>
                        <a href="https://www.amazon.com/stores/author/B08SMT6L6Y" target="_blank">Order a Book <i class="fa fa-angle-right"></i></a>
                    </div>
                 </div>
            </div>
            <div class="sec-five-inner">
                <div class="sec-five-card">
                    <img src="images/icon-1.png">
                    <h4>Marketers</h4>
                    <p>Stay updated on evolving branding trends and strategies in marketing.</p>
                </div>
                <div class="sec-five-card">
                    <img src="images/icon-2.png">
                    <h4>Creative Thinkers</h4>
                    <p>Discover fresh branding concepts to inspire and fuel creative ideas.</p>
                </div>
                <div class="sec-five-card">
                    <img src="images/icon-3.png">
                    <h4>Entrepreneurs</h4>
                    <p>Learn branding techniques to enhance your business and drive growth.</p>
                </div>
                <div class="sec-five-card">
                    <img src="images/icon-3.png">
                    <h4>Aspiring Professionals</h4>
                    <p>Master branding skills that will set you apart in the industry.</p>
                </div>
            </div>
        </div>
    </section>
    <!--end-->
    
    <!--subscribe sec-->
    <section class="subscribe-sec">
        <div class="container">
            <div class="bg-subscribe">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="subscribe-left">
                        <h3>Get Chapter One for Free</h3>
                        <p>Join the newsletter and get the first chapter of any of my books for FREE!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-right">
                        <form action="signup.php" method="post">
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required="">
                            </div>
                            <button type="submit" class="btn btn-theme w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
</section>    <!--end-->
    

<?php
include_once('footer.php');
?>