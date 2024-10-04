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
<!-- header section end's -->







<div class="heading" style ="background:url(book-section-images/book-background-image.jpg) no-repeat">
    <h1>book now</h1>
</div>




<!-- booking section starts -->

<section class="booking">

    <h1 class="heading-title">book your trip</h1>

    <form action="book_form.php" method="post" class="book-form">   <!-- php connection -->
    
        <div class="flex">
            
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>

        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>

        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>

        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>

        <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">       <!-- name attribute ni databse madhe nava insert krrun access kele -->
        </div>

        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">    <!-- number mula 1 counter provide hoto -->
        </div>

        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
        </div>

        <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
        </div>

            <!--  option/dropdown list -->
        <div class="inputBox">
            <span>travel through :</span>
            <select name="through" id="">
            <option value="BUS">bus</option>
            <option value="TRAIN">train</option>
            <option value="CAR">car</option>
            <option value="BIKE">bike</option>
            <option value="PLANE">plane</option>
            </select>
        </div>
             <!-- dropdown list end here -->

        </div>

        <input type="submit" value="submit" class ="btn" name="send" onclick="message()">        <!-- onclick kelya vr message function pass kela -->



         <!-- message section - succees or failed starts  -->
        <div class="message">
            <div class="success">Ticket booked</div>
            <div class="danger">Field Can't Be Empty</div>
        </div>
        <!-- message section - succees or failed ends  -->


    </form>

</section>


<!-- booking section ends -->















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





