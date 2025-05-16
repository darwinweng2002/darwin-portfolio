<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Me - Darwin Villanueva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background-color: #f4f4f4;
    }

.about-fullscreen {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: stretch;
  padding: 0;
  background-color: #f4f4f4;
}
 nav.d-none.d-md-flex {
  background-color: #fff; /* Match contact-section */
}
.about-box {
  width: 100%;
  max-width: 100%;
  height: 100vh;
  background: #fff;
  overflow-y: auto;
  box-sizing: border-box;
  padding: 60px 40px;
  display: flex;
  flex-direction: column;
  /* Remove vertical centering */
}

    h2.section-title {
      font-family: 'Poppins', sans-serif;
      font-size: 34px;
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
    }

    .info-box h5 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .tech-badges .badge {
      margin: 5px;
      font-size: 14px;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 14px;
    }

    .btn-back {
      display: block;
      margin: 40px auto 0;
      width: fit-content;
    }

    footer {
      background: #212529;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: auto;
    }

    @media (max-width: 768px) {
      .about-box {
        padding: 30px 20px;
      }
      h2.section-title {
        font-size: 28px;
      }
       .about-box {
    padding: 40px 16px;
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
  </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<!-- 🔘 Hamburger -->
<button class="hamburger-btn d-md-none" onclick="toggleMobileNav()">
  <i class="fas fa-bars"></i>
</button>
<!-- 📱 Mobile Side Nav -->
<div id="mobileNav" class="mobile-nav">
  <button class="btn-close" onclick="toggleMobileNav()" style="position:absolute; top:20px; right:20px;"></button>
  <a href="about.php"><i class="bi bi-briefcase-fill"></i> Works</a>
  <a href="assets/files/sample1.pdf" target="_blank"><i class="bi bi-file-earmark-person-fill"></i> Resume</a>
  <a href="#"><i class="bi bi-journal-bookmark-fill"></i> Shelf</a>
</div>

<main class="about-fullscreen">
  <div class="about-box">
    <h2 class="section-title"><i class="fas fa-user-circle me-2"></i> About Me</h2>

    <div class="info-box mb-4">
      <h5>Introduction</h5>
      <p>Hello! I'm <strong>Darwin Villanueva</strong>, a junior web developer passionate about building functional and visually appealing websites. I enjoy turning ideas into reality through clean code and solid design systems.</p>
    </div>

   <div class="info-box mb-4">
  <h5><i class="fas fa-graduation-cap me-2 text-primary"></i>Education</h5>
  <p>
    Bachelor of Science in Information Technology, Major in Web Development<br>
    <em>President Ramon Magsaysay State University</em>
  </p>

  <!-- 🖼 School Image -->
  <div class="my-3 text-center">
    <img src="assets/images/prmsu.jpg" alt="PRMSU Campus" class="img-fluid rounded shadow" style="max-width: 100%; height: auto; border: 1px solid #ccc;">
    <p class="small text-muted mt-2">PRMSU Main Campus, Iba, Zambales</p>
  </div>

  <!-- 📍 Google Map Embed -->
  <div class="map-container" style="height: 280px;">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.117987379319!2d119.97716597585863!3d15.36463588518271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396e3d9f8f6b0a3%3A0x4a46d008f18f0409!2sPresident%20Ramon%20Magsaysay%20State%20University%20-%20Main%20Campus!5e0!3m2!1sen!2sph!4v1715433330000!5m2!1sen!2sph"
      width="100%"
      height="100%"
      style="border:0; border-radius: 12px;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>



    <div class="info-box mb-4">
  <h5>Tech Stack</h5>
  <div class="tech-badges d-flex flex-wrap">
    <span class="badge" style="background-color: #e34f26; color: #fff;">
      <i class="fab fa-html5 me-1"></i> HTML5
    </span>
    <span class="badge" style="background-color: #264de4; color: #fff;">
      <i class="fab fa-css3-alt me-1"></i> CSS3
    </span>
    <span class="badge" style="background-color: #563d7c; color: #fff;">
      <i class="fab fa-bootstrap me-1"></i> Bootstrap
    </span>
    <span class="badge" style="background-color: #f7df1e; color: #000;">
      <i class="fab fa-js-square me-1"></i> JavaScript
    </span>
    <span class="badge" style="background-color: #8892be; color: #fff;">
      <i class="fab fa-php me-1"></i> PHP
    </span>
    <span class="badge" style="background-color: #00758f; color: #fff;">
      <i class="fas fa-database me-1"></i> MySQL
    </span>
    <span class="badge" style="background-color: #f1502f; color: #fff;">
      <i class="fab fa-git-alt me-1"></i> Git
    </span>
  </div>
</div>


   <div class="info-box mb-4">
  <h5><i class="fas fa-bolt me-2 text-warning"></i>Strengths</h5>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><i class="fas fa-laptop-code me-2 text-secondary"></i>Responsive Frontend Development</li>
    <li class="list-group-item"><i class="fas fa-database me-2 text-info"></i>Basic PHP & MySQL CRUD operations</li>
    <li class="list-group-item"><i class="fas fa-server me-2 text-dark"></i>Project Deployment & Hosting</li>
    <li class="list-group-item"><i class="fas fa-paint-brush me-2 text-danger"></i>Consistent UI/UX implementation</li>
  </ul>
</div>


    <div class="info-box mb-4">
      <h5>Career Goal</h5>
      <p>To grow as a full-stack developer and contribute to impactful digital solutions. I'm open to internships, freelance gigs, and exciting projects!</p>
    </div>

    <a href="index.php" class="btn btn-dark btn-back">
      <i class="fas fa-arrow-left me-2"></i> Back to Home
    </a>
  </div>
</main>
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
