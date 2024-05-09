<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>A grocery service typically refers to a business or platform that allows customers to order groceries online or through a mobile app and have them delivered to their doorstep or prepared for pickup at a designated location.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Customers can browse through a digital catalog of grocery items on the service's website or app. These items often include fresh produce, packaged goods, beverages, household essentials, and sometimes even prepared meals..</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p> The review rightly emphasizes the convenience factor of grocery services, noting that customers can order groceries online or through a mobile app and choose between delivery to their doorstep or pickup at a designated location. This flexibility caters to various customer preferences and schedules.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p> The review rightly emphasizes the convenience factor of grocery services, noting that customers can order groceries online or through a mobile app and choose between delivery to their doorstep or pickup at a designated location. This flexibility caters to various customer preferences and schedules.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jennis Auntie</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p> The review rightly emphasizes the convenience factor of grocery services, noting that customers can order groceries online or through a mobile app and choose between delivery to their doorstep or pickup at a designated location. This flexibility caters to various customer preferences and schedules.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>james</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p> The review rightly emphasizes the convenience factor of grocery services, noting that customers can order groceries online or through a mobile app and choose between delivery to their doorstep or pickup at a designated location. This flexibility caters to various customer preferences and schedules .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jin</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p> The review rightly emphasizes the convenience factor of grocery services, noting that customers can order groceries online or through a mobile app and choose between delivery to their doorstep or pickup at a designated location. This flexibility caters to various customer preferences and schedules.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Albert</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p> The review rightly emphasizes the convenience factor of grocery services, noting that customers can order groceries online or through a mobile app and choose between delivery to their doorstep or pickup at a designated location. This flexibility caters to various customer preferences and schedules.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rin</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>