<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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


<!-- home section / hero section starts  ---backgroundimages taklya -->

<section class="home">

    <div class="swiper home-slider">   <!-- swipper class onilne site vrun anla  -->

        <div class="swiper-wrapper">        <!-- swipper-wrapper class onilne site vrun anla  -->
            
            <div class="swiper-slide slide" style="background:url(background-images/hero-section1.jpg)no-repeat">
                <div class="content">
                    <span>Explore,discover,Travel</span>
                    <h3>Travel around the word</h3>
                    <a href="package.php" class="btn">discover more</a>           <!-- package page link kela discover vr click kela ki tyachi link ugdel -->
                </div>
            </div>
            
            <div class="swiper-slide slide" style="background:url(background-images/hero-section2.jpg)no-repeat">
                <div class="content">
                    <span>Explore , discover , Travel</span>
                    <h3>Travel around the word</h3>
                    <a href="package.php" class="btn">discover more</a>           <!-- package page link kela discover vr click kela ki tyachi link ugdel -->
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(background-images/hero-section3.jpg)no-repeat">
                <div class="content">
                    <span>Explore , discover , Travel</span>
                    <h3>make your tour worth while</h3>
                    <a href="package.php" class="btn">discover more</a>           <!-- package page link kela discover vr click kela ki tyachi link ugdel -->
                </div>
            </div>

        </div>
                            
        <div class="swiper-button-next"></div>      <!-- swipper che button ahe online extract kele le -->
        <div class="swiper-button-prev"></div>      <!-- swipper buttons -->

    </div>
</section>

<!-- home section ends-->

<!-- service section start  -->
   
<section class="service">

    <h1 class="heading-title">our services</h1>
    
    <div class="box-container">
        
        <div class="box">
            <img src="services-images/advanture 1.png" alt="">
            <h3>advantures</h3>
        </div>

        <div class="box">
            <img src="services-images/tour-guide1.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="services-images/campfire1.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="services-images/off-road1.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="services-images/camping1.png" alt="">
            <h3>camping</h3>
        </div>
    </div>

</section>
<!-- service section ends -->


<!-- home about section starts -->

<section class="home-about">

    <div class="image">
        <img src="extra-images/about-image.jpg" alt="">     <!-- about-image -->    
    </div>

     <div class="content">
        <h3>about us</h3>
        <p>Discover the world with us.
             We're avid explorers sharing the joy of travel. From hidden
             gems to iconic landmarks, let our expertise guide you on extraordinary journeys.</p>
             <a href="about.php" class="btn">read more</a>              <!-- discover me la pnn btn class dila so same proprty apply zali -->
     </div>

    </section>

<!-- home about section ends -->

<!-- home package section starts --------box section----------- -->

<seection class="home-packages">
    
    <h1 class="heading-title">our packages</h1>

    <div class="box-container">

    <div class="box">
        <div class="image">
            <img src="extra-images/lake.jpg" alt="">             <!--lake image-->
        </div>
        <div class="content">
            <h3>advanture & tour</h3>
            <p> Immerse yourself in thrilling adventures, explore breathtaking landscapes, and create memories that will 
                last a lifetime. Your next extraordinary travel experience awaits!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="extra-images/windmills.jpg" alt="">           <!-- windmill image-->
        </div>
        <div class="content">
            <h3>advanture & tour</h3>
            <p>Immerse yourself in thrilling adventures, explore breathtaking landscapes, and create memories that will 
                last a lifetime. Your next extraordinary travel experience awaits!</p>
        <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="extra-images/mountains.jpg" alt="">           <!-- moutain image -->
        </div>
        <div class="content">
            <h3>advanture & tour</h3>
            <p>Immerse yourself in thrilling adventures, explore breathtaking landscapes, and create memories that will 
                last a lifetime. Your next extraordinary travel experience awaits!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    </div>

    <div class="load-more"> <a href="package.php" class="btn">load more</a></div>

</seection>

<!-- home package section ends -->


<!-- home offer section starts  -->

<section class="home-offer">
    <div class="content">
        <h3>up to 50%off</h3>
        <p>our agency  offers up to 50% off on  holiday packages.
         Use coupon code jay50 for up to 5000 off on domestic flights. Customize your holiday packages .</p>
         <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section ends  -->









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

    <div class="credit">created by <span>Bhakti Barshikar & Omkar Kotkar</span>  |all rights reserved!</div>
</section>
<!-- footer section ends -->


<!-- swippwr js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>



<!-- 5:17 break -->
<!-- 10:31 break -->
<!-- 17:54 break -->
<!-- 27:54 break -->
<!-- 33:01 break -->
<!-- 45:19 break -->
<!-- 53:42 break -->
<!-- 1:11:30 break -->
<!-- 1:13:30 break -->
<!-- 1:19:35 break -->
<!-- 1:27:28 break -->