<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Hive-FACILITITES</title>
    <?php require('inc/links.php');?> 
    <style>
      :root{
       --teal:#2ec1ac;
           }
      .pop:hover{
        border-top-color:var(--teal) !important;
        transform:scale(1.03);
        transition:all 0.3s;
      }
    </style> 
</head>
<body class="bg-light">

<?php require('inc/header.php');?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
  <div class="h-line custom-bg"></div>
  <p class="text-center mt-3">
  Discover the comforts of home with our range of facilities, including high-speed Wi-Fi, satellite television, 
  laundry services, delicious meals, cozy living areas, and refreshing air conditioning.
  </p>
</div> 

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images\wifi.svg" width="40px">
        <h5 class="m-0 ms-3">Wifi</h5>
        </div>
        <p>
        Enjoy seamless connectivity with our high-speed Wi-Fi, ensuring you stay connected throughout your stay.
        </p>
      </div>
    </div>
  
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images\ac.svg" width="40px">
        <h5 class="m-0 ms-3">AC</h5>
        </div>
        <p>
        Stay cool and comfortable year-round with our efficient air conditioning system in our rooms.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images\laundry.svg" width="40px">
        <h5 class="m-0 ms-3">Laundry</h5>
        </div>
        <p>
        Convenience meets cleanliness with in-room laundry facilities, ensuring your stay is hassle-free and comfortable.
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images\television.svg" width="40px">
        <h5 class="m-0 ms-3">Television</h5>
        </div>
        <p>
        Enjoy entertainment on demand with satellite television available in the rooms for your relaxation.
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images\meals.svg" width="40px">
        <h5 class="m-0 ms-3">Meals</h5>
        </div>
        <p>
        Savor delicious meals prepared on request, ensuring a satisfying,time saving and inexpensive culinary experience during your stay.
        </p>
        </p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images\livingarea.svg" width="40px">
        <h5 class="m-0 ms-3">Living Area</h5>
        </div>
        <p>
        Relax and socialize in spacious living areas, designed for comfort and camaraderie during your stay.
      </div>
    </div>

  </div>
</div>

<?php require('inc/footer.php');?>

</body>
</html>