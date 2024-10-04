<!-- header footer home.php madhlach copy paste krycha -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

<!-- swiper css link means slide changing css + down side la java script chi pn link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- font awsome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- custom css file link -->
<link rel="stylesheet" href="style.css">


</head>
<body>
  
<!-- header section starts -->

<section class="header">

<a href="home.php" class ="logo">travel.</a>
<nav class="navbar">                            <!-- nav bar create kela 1 -->
    <a href="home.php">home</a>                 <!-- anchor tag ni other php files link kelya  -->
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
    <a href="admin.php">admin</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>           <!-- fas fa-bars ni bars import kele font awsome link ni -->

</section>
<!-- header section ens's -->

<div class="heading" style ="background:url(about-section-images/about-background-imaege-1.jpg) no-repeat">       <!-- about section background image -->
    <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="extra-images/about-image.jpg" alt="">     <!-- home page vrchi ch image ghetli -->
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>Discover the world with us.We're avid explorers sharing the joy of travel. From hidden
             gems to iconic landmarks, let our expertise guide you on extraordinary journeys.</p>
        <p>Discover the world with us. We're avid explorers sharing the joy of travel. From hidden
            gems to iconic landmarks, let our expertise guide you on extraordinary journeys.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>      <!-- font awsome link ni hee cdngenrate kele-icons -->
                <span>24/7 guide service</span>
            </div>
        </div>
    </div>
</section>
<!-- about section ends  -->

<!-- review section starts -->

    <section class="reviews">

    <h1 class="heading-title">clients reviews</h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">      <!--vvvimp to note- swiper-slider nahi heycha *swiper-slide*  gheycha -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Exceptional service and breathtaking views! Our stay was nothing short of magical. The staff went above and beyond to make us feel at home. A must-visit destination!".</p>
                <h3>Yash Mane</h3>
                <span>traveller</span>
                <img src="review-images/review-img-1.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>From the moment we arrived, we were captivated by the charm of this hidden gem. The accommodations were luxurious, the cuisine exquisite, and the local adventures unforgettable. A true paradise!"</p>
                <h3>Jay Mane</h3>
                <span>traveller</span>
                <img src="review-images/review-img-2.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>An unforgettable journey! The travel agency curated a seamless itinerary, ensuring we experienced the best of each destination. The accommodations were top-notch, and the cultural immersion was priceless."</p>
                <h3>Ronak Jadhav</h3>
                <span>traveller</span>
                <img src="review-images/review-img-3.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Five-star experience all the way! The attention to detail and personalized service made our trip truly special. Each destination offered a unique blend of adventure and relaxation. Highly recommend this travel agency!</p>
                <h3>Om Jindam</h3>
                <span>traveller</span>
                <img src="review-images/review-img-4.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>         <!-- fas fa-star -cdn ni stars (*) import kele rating show kryla -->
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The perfect escape! Impeccable planning and flawless execution by the travel team. From vibrant cityscapes to serene landscapes, every moment was a postcard. An enriching and rejuvenating travel experience.</p>
                <h3>Omkar Pokale</h3>
                <span>traveller</span>
                <img src="review-images/review-img-5.jpg" alt="">       <!-- 5 ch ch bnvla review -->
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Five-star experience all the way! The attention to detail and personalized service made our trip truly special. Each destination offered a unique blend of adventure and relaxation. Highly recommend this travel agency!</p>
                <h3>Bhavesh Ratnaparkhi</h3>
                <span>traveller</span>
                <img src="review-images/review-img-6.jpeg" alt="">
            </div>

        </div>

    </div>

    </section>

<!-- review section ends -->















<!-- footer section start -->

<section class="footer">

    <div class="box-container">
        
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>                 <!-- anchor tag ni other php files link kelya  -->
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>external links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+91 1234567890</a>
            <a href="#"><i class="fas fa-phone"></i>+91 9876543210</a>
            <a href="#"><i class="fas fa-envelope"></i>manejay288@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>ahilyanagar, india- 414001</a>
        </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
    </div>

    <div class="credit">created by <span>Prathmesh Mane & Bhavesh Ratnaparkhi</span>  |all rights reserved!</div>
</section>
<!-- footer section ends -->

























<!-- swippwr js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>





