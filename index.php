<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Hive-HOME</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        
        .availability-form{
          margin-top:-50px;
          z-index:2;
          position:relative;  
        }

        @media screen and(max-width:575px){
            .availability-form{
          margin-top:25px;
          padding:0 35px;
        }
        }
    </style>
</head>
<body class="bg-light">

 <?php require('inc/header.php');?>

<!-- Carousel -->

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-11 p-0">
      <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images\7.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="images\6.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="images\10.jpg" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</div>

<!-- check availability form -->
<!-- <div class="container-fluid availability-form mt-4">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">Check-In</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">Check-Out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">Gender</label>
            <select class="form-select shadow-none">
              <option selected>Select Option</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight:500;">Lodging Option</label>
            <select class="form-select shadow-none">
              <option selected>Select Option</option>
              <option value="1">Single Room</option>
              <option value="2">Shared Room</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
 -->

<!-- Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Accommodation</h2>

<div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 my-3">  
    <div class="card border-0 shadow" style="max-width:250px; margin:auto;">
        <img src="images\11.jpg" class="card-img-top">
        <div class="card-body">
            <h5>Green Hostel Room</h5>
            <h6 class="mb-4">Rs.30,000</h6>
            <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge bg-light text-dark text-wrap lh-base">Attached Bathroom</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Study Desk & Chair</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Common Dining Area</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Mini Balcony</span>
            </div>
            <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge bg-light text-dark text-wrap lh-base">Wifi</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Television</span>
                <span class="badge bg-light text-dark text-wrap lh-base">AC</span>
            </div>
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none" id="moreDetailsBtn2">More Details</a>
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none" id="bookNowBtn2">Book Now</a>

  <script>
    document.getElementById("moreDetailsBtn2").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "accommodation.php";
    });
    document.getElementById("bookNowBtn2").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "accommodation.php";
    });
  </script>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 my-3">  
    <div class="card border-0 shadow" style="max-width:250px; margin:auto;">
        <img src="images\13.jpg" class="card-img-top">
        <div class="card-body">
            <h5>Safe Haven Room</h5>
            <h6 class="mb-4">Rs.15,000</h6>
            <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge bg-light text-dark text-wrap lh-base">Shared Attached Bathroom</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Study Desk & Chair</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Common Dining Area</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Mini Balcony</span>
            </div>
            <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge bg-light text-dark text-wrap lh-base">Wifi</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Television</span>
                <span class="badge bg-light text-dark text-wrap lh-base">AC</span>
            </div>
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none" id="moreDetailsBtn3">More Details</a>
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none" id="bookNowBtn3">Book Now</a>

  <script>
    document.getElementById("moreDetailsBtn3").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "accommodation.php";
    });
    document.getElementById("bookNowBtn3").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "accommodation.php";
    });
  </script>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 my-3">  
    <div class="card border-0 shadow" style="max-width:250px; margin:auto;">
        <img src="images\12.jpg" class="card-img-top">
        <div class="card-body">
            <h5>Bird's Nest Room</h5>
            <h6 class="mb-4">Rs.25,000</h6>
            <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge bg-light text-dark text-wrap lh-base">Attached Bathroom</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Study Desk & Chair</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Common Dining Area</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Mini Balcony</span>
            </div>
            <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge bg-light text-dark text-wrap lh-base">Wifi</span>
                <span class="badge bg-light text-dark text-wrap lh-base">Television</span>
                <span class="badge bg-light text-dark text-wrap lh-base">AC</span>
            </div>
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none" id="moreDetailsBtn">More Details</a>
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none" id="bookNowBtn">Book Now</a>

  <script>
    document.getElementById("moreDetailsBtn").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "accommodation.php";
    });
    document.getElementById("bookNowBtn").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "accommodation.php";
    });
  </script>
            </div>
        </div>
    </div>
</div>

    </div>
    <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" id="moreRoomsBtn">More Rooms for Rent&gt;&gt;&gt;</a>

<script>
  document.getElementById("moreRoomsBtn").addEventListener("click", function(event) {
    event.preventDefault();
    window.location.href = "accommodation.php";
  });
</script>  
        </div>

    </div>
</div>

<!-- Facilities -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images\wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images\ac.svg" width="80px">
            <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images\laundry.svg" width="80px">
            <h5 class="mt-3">Laundry</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images\television.svg" width="80px">
            <h5 class="mt-3">Television</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images\meals.svg" width="80px">
            <h5 class="mt-3">Meals</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images\livingarea.svg" width="80px">
            <h5 class="mt-3">Living Area</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" id="moreFacilitiesBtn">More Facilities&gt;&gt;&gt;</a>

  <script>
    document.getElementById("moreFacilitiesBtn").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "facilities.php";
    });
  </script> 
        </div>
    </div>
</div>

<!-- Testimonials -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

<div class="container mt-5">
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="images\wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Avi</h6>
        </div>
        <p>
        Convenient, affordable, and user-friendly platform for student accommodation searches.
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="images\wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Charlie</h6>
        </div>
        <p>
        Streamlined interface, helpful filters, ideal for hassle-free hostel hunting.
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="images\wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Jules</h6>
        </div>
        <p>
        Responsive customer service, ensuring smooth booking experiences for students.
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="images\wifi.svg" width="30px">
            <h6 class="m-0 ms-2"> Damien</h6>
        </div>
        <p>
        Innovative features enhance the overall experience of searching for student housing.
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="images\wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Kylo</h6>
        </div>
        <p>
        Trusted choice among students for its reliability and extensive accommodation options.
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>  
</div>
<div class="col-lg-12 text-center mt-5">
<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" id="knowMoreBtn">Know More&gt;&gt;&gt;</a>

<script>
  document.getElementById("knowMoreBtn").addEventListener("click", function(event) {
    event.preventDefault();
    window.location.href = "aboutus.php";
  });
</script>
        </div>

<!-- Contact Us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5758403132254!2d80.04157289999999!3d6.8213291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1710162277576!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h6>
                <a href="tel: +94123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> +94123456789
                </a><br>
                <a href="tel: +94123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-whatsapp"></i> +94123456789
                </a>
                <br>
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow Us</h5>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter-x me-1"></i>Twitter
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram"></i>Instagram
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook"></i>Facebook
                </span>
                </a>
                <br>    
            </div>
        </div>
    </div>
</div>



    <?php require('inc/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
  var swiper = new Swiper(".mySwiper", {
    effect: "cube",
    grabCursor: true,
    loop:true,
    pagination: {
      el: ".swiper-pagination",
    },
  });

  var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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