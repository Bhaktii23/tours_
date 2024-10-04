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


<div class="heading" style ="background:url(admin-images/admin-background-image.jpg) no-repeat">
    <!-- <h1>login here</h1> -->



<div class="form-box">
    <h1>login here</h1>
    <div class="input-Box">
    <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Email id" >
    </div>
    
    
    <div class="input-Box">
    <i class="fas fa-key"></i>
        <input type="password" placeholder="password" id="myInput" >
        <span class="eye" onclick="myfunction()">
            <i id="hide1" class="fas fa-eye"></i>
            <i id="hide2" class="fas fa-eye-slash"></i>
        </span>
    </div>
    <a href="table.php"><button type="button" class="login-btn">login</button></a>     
    <!-- ata #chya jaggi data bse curd opration chi link deychi -->

    
</div>

</div>      <!-- raindear image div  -->







<!-- swippwr js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>
</body>
</html>