<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | Nobuko Japan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0b0b0b;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    /* Header Section */
    .hero-section {
      background: url('https://images.unsplash.com/photo-1605367089813-187b0e1c5f1e') center/cover no-repeat;
      min-height: 80vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: relative;
    }
    .hero-section::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.7);
    }
    .hero-section h1 {
      font-size: 5rem;
      font-weight: 800;
      z-index: 2;
      color: #fff;
      text-transform: uppercase;
    }

    /* Contact Section */
    .contact-section {
      padding: 60px 0;
      background: #111;
    }
    .contact-section h2 {
      color: #fff;
      font-size: 2.5rem;
      font-weight: 700;
    }
    .contact-section h2 span {
      color: #e63946;
    }
    .form-control, textarea {
      background: transparent;
      border: 1px solid #444;
      color: #fff;
      border-radius: 0;
    }
    .form-control:focus {
      border-color: #e63946;
      box-shadow: none;
    }
    .btn-custom {
      background: #e63946;
      color: #fff;
      border: none;
      width: 100%;
      padding: 12px;
      text-transform: uppercase;
      font-weight: 600;
    }
    .btn-custom:hover {
      background: #c62828;
    }

    /* Contact Info */
    .contact-info p, .contact-info a {
      color: #ccc;
      margin-bottom: 5px;
      text-decoration: none;
    }
    .social-icons a {
      color: #fff;
      margin-right: 15px;
      font-size: 1.2rem;
      transition: 0.3s;
    }
    .social-icons a:hover {
      color: #e63946;
    }

    /* Footer */
    footer {
      background: #0a0a0a;
      padding: 40px 0;
    }
    footer h5 {
      color: #fff;
      font-weight: 600;
      margin-bottom: 15px;
    }
    footer p, footer a {
      color: #ccc;
      font-size: 0.95rem;
      text-decoration: none;
    }
    footer a:hover {
      color: #e63946;
    }
    .footer-bottom {
      border-top: 1px solid #333;
      padding-top: 15px;
      text-align: center;
      font-size: 0.9rem;
      color: #aaa;
    }
  </style>
</head>
<body>


  <!-- nav -->

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <button type="button" class="btn btn-light">Light</button>
      </ul>

    </div>
  </div>
</nav>
 -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top bg-dark py-2">
  <div class="container">
    <!-- Left: Logo -->
    <a class="navbar-brand d-flex align-items-center fw-bold" href="#">
      <img src="https://via.placeholder.com/40x40?text=NJ" alt="Logo" class="me-2 rounded-circle">
      NOBUKO <span class="text-danger">JAPAN</span>
    </a>

    <!-- Toggler (mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Center + Right (inside collapse for full responsiveness) -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

      <!-- Center: Menu -->
      <ul class="navbar-nav gap-4 fw-semibold mx-auto text-center">
        <li class="nav-item">
          <a class="nav-link active text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="stockCarsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Stock Cars
          </a>
          <ul class="dropdown-menu bg-dark border-0 shadow">
            <li><a class="dropdown-item text-white" href="#">Japan Stock</a></li>
            <li><a class="dropdown-item text-white" href="#">UK Stock</a></li>
            <li><a class="dropdown-item text-white" href="#">Cyprus Stock</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu bg-dark border-0 shadow">
            <li><a class="dropdown-item text-white" href="#">Car Shipping</a></li>
            <li><a class="dropdown-item text-white" href="#">Vehicle Inspection</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact us</a>
        </li>
      </ul>

      <!-- Right: Request & Login (moved inside collapse for mobile responsiveness) -->
      <div class=" flex-column align-items-center mt-3 mt-lg-0">
        <button class="btn btn-light fw-semibold px-3 mb-2">Request a Car</button>
        <a href="#" class="text-white text-decoration-none">
          <i class="fa fa-user-circle fs-5 me-1"></i> Login
        </a>
      </div>

    </div>
  </div>
</nav>




  <!-- Hero Section -->
  <section class="hero-section text-center">
    <h1>Contact</h1>
  </section>





<!--  Contact Section -->
<section class="contact-section py-5" style="background: linear-gradient(135deg, #0b0b0b, #1a1a1a);">
  <div class="container">
    <!-- Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-white display-5">
        Con<span class="text-danger">nect</span> with us
      </h2>
      <p class="text-secondary fs-5">
        Feel free to contact us — we’ll get back to you as soon as we can.
      </p>
    </div>

    <div class="row g-5 align-items-start justify-content-center">
      <!-- Contact Form -->
      <div class="col-lg-6">
        <div class="p-4 rounded-4 shadow-lg" style="backdrop-filter: blur(12px); background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
          <form method="POST" action="contact_process.php">
            <div class="mb-3">
              <label class="form-label text-light fw-semibold">
                <i class="fa fa-user me-2 text-danger"></i>Full Name
              </label>
              <input type="text" name="name" class="form-control bg-transparent text-light border-secondary" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label class="form-label text-light fw-semibold">
                <i class="fa fa-envelope me-2 text-danger"></i>Email Address
              </label>
              <input type="email" name="email" class="form-control bg-transparent text-light border-secondary" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label class="form-label text-light fw-semibold">
                <i class="fa fa-phone me-2 text-danger"></i>Phone Number
              </label>
              <input type="text" name="phone" class="form-control bg-transparent text-light border-secondary" placeholder="Enter your phone">
            </div>
            <div class="mb-3">
              <label class="form-label text-light fw-semibold">
                <i class="fa fa-comment-dots me-2 text-danger"></i>Your Message
              </label>
              <textarea name="message" rows="4" class="form-control bg-transparent text-light border-secondary" placeholder="Write your message"></textarea>
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-semibold py-2 mt-2 contact-btn">
              <i class="fa fa-paper-plane me-2"></i> Send Message
            </button>
          </form>
        </div>
      </div>

      <!-- Contact Details -->
      <div class="col-lg-5 text-light">
        <div class="ps-lg-4 mt-4 mt-lg-0">
          <h4 class="fw-bold mb-4 border-bottom pb-2 text-uppercase">Contact details</h4>
          <p class="mb-2"><i class="fa fa-phone me-2 text-danger"></i> +44 00 0000 0000</p>
          <p class="mb-2"><i class="fa fa-phone me-2 text-danger"></i> +44 00 0000 0000</p>
          <p class="mb-2"><i class="fa fa-envelope me-2 text-danger"></i> info@nobukojapan.com</p>
          <p><i class="fa fa-envelope me-2 text-danger"></i> sales@nobukojapan.com</p>

          <h5 class="fw-bold mt-4 mb-3 text-uppercase">Follow us</h5>
          <div class="d-flex gap-4 fs-4">
            <a href="#" class="text-light social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-light social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-light social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-light social-link"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✨ Extra Styling -->
<style>
.contact-btn {
  transition: all 0.3s ease;
  box-shadow: 0 0 10px rgba(220, 53, 69, 0.3);
}
.contact-btn:hover {
  box-shadow: 0 0 25px rgba(220, 53, 69, 0.7);
  transform: scale(1.03);
}
.social-link {
  transition: color 0.3s, transform 0.3s;
}
.social-link:hover {
  color: #dc3545;
  transform: scale(1.2);
}
input::placeholder, textarea::placeholder {
  color: rgba(255,255,255,0.6);
}
</style>


  <!-- Footer -->
<footer class="footer bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row gy-4 text-center text-md-start">
      <!-- Company Info -->
      <div class="col-md-4">
        <h5 class="text-uppercase fw-bold text-white mb-3">NOBUKO JAPAN High Quality Used Car Supplier</h5>
        <p class="small text-muted">
          Import Japanese Vehicles, Auction Cars, Japanese Used Cars for sale.<br><br>
          This company has become a leading Japanese MPV specialist and a top choice for those looking to import Japanese cars.
        </p>
      </div>

      <!-- By Maker -->
      <div class="col-md-2">
        <h6 class="fw-bold text-white mb-3 border-bottom border-danger pb-2">By Maker</h6>
        <ul class="list-unstyled small">
          <li>AUDI</li>
          <li>BMW</li>
          <li>HONDA</li>
          <li>NISSAN</li>
          <li>TOYOTA</li>
          <li>VOLKSWAGEN</li>
        </ul>
      </div>

      <!-- By Type -->
      <div class="col-md-2">
        <h6 class="fw-bold text-white mb-3 border-bottom border-danger pb-2">By Type</h6>
        <ul class="list-unstyled small">
          <li>HATCHBACK</li>
          <li>MPV</li>
          <li>SEDAN</li>
          <li>STATION WAGON</li>
          <li>SUV</li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4">
        <h6 class="fw-bold text-white mb-3 border-bottom border-danger pb-2">Contact Details</h6>
        <p class="small mb-1"><i class="fa fa-map-marker-alt me-2 text-danger"></i>3rd floor, Stanford Annex Building, Tokyo 151-0063</p>
        <p class="small mb-1"><i class="fa fa-phone me-2 text-danger"></i>+81 34 510 6891</p>
        <p class="small mb-3"><i class="fa fa-envelope me-2 text-danger"></i>info@nobukojapan.com</p>
        <div class="d-flex justify-content-center justify-content-md-start gap-3">
          <a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

    <hr class="border-secondary my-4">

    <!-- Footer Bottom -->
    <div class="footer-bottom text-center small text-muted">
      © Copyright 1995–2024 <span class="text-white fw-bold">NOBUKO JAPAN</span>. All rights reserved. 
      <a href="#" class="text-danger text-decoration-none ms-2">TERMS OF TRADE (PDF)</a> | 
      <a href="#" class="text-danger text-decoration-none">PRIVACY POLICY</a>
    </div>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 

<?php
if (isset($_POST['submit'])) {
    // Step 1: Get form data
    $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message']
    );

    // Step 2: Read existing JSON file (if it exists)
    $file = 'data.json';
    if (file_exists($file)) {
        $json_data = json_decode(file_get_contents($file), true);
    } else {
        $json_data = [];
    }

    // Step 3: Add new entry
    $json_data[] = $data;

    // Step 4: Save updated data to JSON file
    file_put_contents($file, json_encode($json_data, JSON_PRETTY_PRINT));

    echo "<script>alert('✅ Data saved ');</script>";
}
?>




