<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Hive-About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@6/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>  
</head>
<body class="bg-light">

<?php require('inc/header.php');?>
<style>
 :root {
            --teal: #2ec1ac;
        }
        .box {
            border-top-color: var(--teal) !important;
        }
</style>
<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">About Us</h2>
  <div class="h-line custom-bg"></div>
  <p class="text-center mt-3">
  Discover the comforts of home with our range of facilities, including high-speed Wi-Fi, satellite television, 
  laundry services, delicious meals, cozy living areas, and refreshing air conditioning.
  </p>
</div> 

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Welcome to Hostel Hive</h3>
      <p>
      "Developed by software engineering undergraduates at NSBM Green University, Hostel Hive is a pioneering platform tailored to assist students in securing accommodation near the campus. Our solution, crafted from scratch, streamlines the search process, ensuring convenience and peace of mind in finding ideal living spaces for students within the university vicinity."
      </p>
    </div>
    <div class="col-lg-5 col-md-5-mb-4 order-lg-2 order-md-2 order-1">
      <img src="images\group.jpeg" class="w-50">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/room.svg" width="70px">
        <h4 class="mt-3">30+ New Rooms Each Month</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/handshake.svg" width="70px">
        <h4 class="mt-3">20+ Rooms Rented out Each Month </h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/member.svg" width="70px">
        <h4 class="mt-3">3000+ Student Members Joined</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/rating.svg" width="70px">
        <h4 class="mt-3">300+ 4 Star Ratings or Above</h4>
      </div>
    </div>
  </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">OUR TEAM</h3>

<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/tharushi.jpeg" class="w-100">
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/shannon.jpeg" class="w-100">
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/nipuni.jpeg" class="w-100">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<?php require('inc/footer.php');?>

<script src="https://cdn.jsdelivr.net/npm/swiper@6/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
      
    },
    breakpoints:{
        320:{
            slidesPerView:1,
        },
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3,
        },
      }
  });
</script>

</body>
</html>
