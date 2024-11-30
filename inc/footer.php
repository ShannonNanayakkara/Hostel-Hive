<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">Hostel Hive</h3>
            <p>
            "Hostel Hive: Your ultimate destination for hassle-free student accommodation. With an intuitive interface, extensive listings, and responsive customer service, we simplify the search for affordable, convenient living options. Join our community and discover the perfect place to call home during your academic journey."
            </p>
        </div>
        <div class="col-lg-4 p-4">
        <a href="#" class="d-inline-block mb-2 text-dark text-decorations-none" id="homeLink">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decorations-none" id="accommodationLink">Accommodation</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decorations-none" id="facilitiesLink">Facilities</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decorations-none" id="contactUsLink">Contact Us</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decorations-none" id="aboutUsLink">About Us</a>

  <script>
    // Function to navigate to index.php when "Home" link is clicked
    document.getElementById("homeLink").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "index.php";
    });

    // Function to navigate to accommodation.php when "Accommodation" link is clicked
    document.getElementById("accommodationLink").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "accommodation.php";
    });

    // Function to navigate to facilities.php when "Facilities" link is clicked
    document.getElementById("facilitiesLink").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "facilities.php";
    });

    // Function to navigate to contactus.php when "Contact Us" link is clicked
    document.getElementById("contactUsLink").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "contactus.php";
    });

    // Function to navigate to aboutus.php when "About Us" link is clicked
    document.getElementById("aboutUsLink").addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = "aboutus.php";
    });
  </script>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow Us</h5>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"><i class="bi bi-twitter-x me-1"></i>Twitter</a><br>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"><i class="bi bi-instagram me-1"></i>Instagram</a><br>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"><i class="bi bi-facebook me-1"></i>Facebook</a>
        </div>
    </div>
</div>

<h6 class="text-center custom-bg text-white p-3 m-0">Designed and Developed by Hostel Hive WEBDEV</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>