<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Works - Darwin Villanueva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .project-section {
      padding: 60px 20px;
    }

    .section-title {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 32px;
      text-align: center;
      margin-bottom: 40px;
    }

    .project-card {
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    .project-card:hover {
      transform: translateY(-5px);
    }

    .project-thumb {
      width: 100%;
      height: 200px;
      object-fit: cover;
      cursor: pointer;
    }

    .project-content {
      padding: 20px;
      flex-grow: 1;
    }

    .project-title {
      font-family: 'Poppins', sans-serif;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .badge-tech {
      font-size: 12px;
    }

    footer {
      background: #212529;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: auto;
    }

    .project-buttons a {
      margin-right: 8px;
    }

    @media (max-width: 768px) {
      .project-thumb {
        height: 160px;
      }
    }

    .mobile-nav {
      position: fixed;
      top: 0;
      right: -100%;
      width: 260px;
      height: 100vh;
      background-color: #111;
      padding: 70px 25px 20px;
      box-shadow: -6px 0 18px rgba(0, 0, 0, 0.3);
      z-index: 1050;
      display: flex;
      flex-direction: column;
      gap: 18px;
      transition: right 0.35s ease;
    }

    .mobile-nav a {
      text-decoration: none;
      font-size: 16px;
      color: #fff;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: 0.3s ease;
    }

    .mobile-nav a:hover {
      color: #ff4c60;
      transform: translateX(4px);
    }

    .mobile-nav.show {
      right: 0;
    }

    .hamburger-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #111;
      color: #fff;
      border: none;
      font-size: 20px;
      padding: 10px 14px;
      border-radius: 8px;
      z-index: 1100;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }
    /* Enhanced Carousel Controls */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgba(255, 255, 255, 0.85); /* Light background for visibility */
  border-radius: 50%;
  padding: 10px;
  filter: drop-shadow(0 0 4px rgba(0, 0, 0, 0.7));
  transition: transform 0.2s ease;
}

.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
  transform: scale(1.1);
  background-color: rgba(255, 255, 255, 1);
}

  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="project-section container">
  <h2 class="section-title"><i class="fas fa-code me-2"></i> My Works</h2>

  <div class="row row-cols-1 row-cols-md-3 g-5 justify-content-center">
    <!-- 🔹 Project 1 -->
    <div class="col-md-6 col-lg-4">
      <div class="project-card">
        <img src="assets/images/spms-image1.png"
             alt="SPMS Project Thumbnail"
             class="project-thumb"
             data-bs-toggle="modal"
             data-bs-target="#modalSPMS">
        <div class="project-content">
          <h4 class="project-title">spms-system</h4>
          <p class="text-muted">Supply and property management system with inventory features, built with PHP and MySQL.</p>
          <div class="mb-3 d-flex flex-wrap gap-2">
            <span class="badge" style="background-color: #8892be; color: #fff;"><i class="fab fa-php me-1"></i> PHP</span>
            <span class="badge" style="background-color: #00758f; color: #fff;"><i class="fas fa-database me-1"></i> MySQL</span>
            <span class="badge bg-secondary"><i class="fab fa-html5 me-1"></i> HTML/CSS</span>
          </div>
          <div class="project-buttons">
            <a href="https://github.com/darwinweng2002/spms-system" class="btn btn-outline-dark btn-sm" target="_blank">
              <i class="fab fa-github me-1"></i> View Code
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 🔹 Project 2 -->
    <div class="col-md-6 col-lg-4">
      <div class="project-card">
        <img src="assets/images/ramonian-1.png"
             alt="Ramonian Project Thumbnail"
             class="project-thumb"
             data-bs-toggle="modal"
             data-bs-target="#modalRamonian">
        <div class="project-content">
          <h4 class="project-title">ramonianlostgems</h4>
          <p class="text-muted">An archive for showcasing rare and lost items in PRMSU, designed as a simple PHP-based tracker.</p>
          <div class="mb-3 d-flex flex-wrap gap-2">
            <span class="badge" style="background-color: #8892be; color: #fff;"><i class="fab fa-php me-1"></i> PHP</span>
            <span class="badge" style="background-color: #00758f; color: #fff;"><i class="fas fa-database me-1"></i> MySQL</span>
            <span class="badge" style="background-color: #563d7c; color: #fff;"><i class="fab fa-bootstrap me-1"></i> Bootstrap</span>
          </div>
          <div class="project-buttons">
            <a href="https://github.com/darwinweng2002/ramonianlostgems" class="btn btn-outline-dark btn-sm" target="_blank">
              <i class="fab fa-github me-1"></i> View Code
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

 
 <!-- 🖼️ Lightbox Modal with Carousel for SPMS -->
<div class="modal fade" id="modalSPMS" tabindex="-1" aria-labelledby="modalSPMSLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="modalSPMSLabel">SPMS Project Gallery</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div id="carouselSPMS" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/spms-image1.png" class="d-block w-100" alt="SPMS View 1">
            </div>
            <div class="carousel-item">
              <img src="assets/images/spms-image2.png" class="d-block w-100" alt="SPMS View 2">
            </div>
            <div class="carousel-item">
              <img src="assets/images/spms-image3.png" class="d-block w-100" alt="SPMS View 3">
            </div>
            <div class="carousel-item">
              <img src="assets/images/spms-image4.png" class="d-block w-100" alt="SPMS View 3">
            </div>
            
          </div>
          <!-- Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselSPMS" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselSPMS" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- 🖼️ Modal with Carousel for Ramonian -->
<div class="modal fade" id="modalRamonian" tabindex="-1" aria-labelledby="modalRamonianLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="modalRamonianLabel">Ramonian Project Gallery</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div id="carouselRamonian" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/ramonian-1.png" class="d-block w-100" alt="Ramonian View 1">
            </div>
            <div class="carousel-item">
              <img src="assets/images/ramonian-2.png" class="d-block w-100" alt="Ramonian View 2">
            </div>
            <div class="carousel-item">
              <img src="assets/images/ramonian-3.png" class="d-block w-100" alt="Ramonian View 2">
            </div>
            <div class="carousel-item">
              <img src="assets/images/ramonian-4.png" class="d-block w-100" alt="Ramonian View 2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselRamonian" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselRamonian" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function toggleMobileNav() {
    document.getElementById("mobileNav").classList.toggle("show");
  }

  document.addEventListener("DOMContentLoaded", function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    [...tooltipTriggerList].forEach(el => new bootstrap.Tooltip(el));
  });
</script>
<?php include 'includes/footer.php'; ?>
</body>
</html>