<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    h1, h2 {
      font-family: 'Poppins', sans-serif;
    }

    .badge-bubble {
      display: inline-block;
      background-color: #212529;
      color: white;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 14px;
    }

    .avatar-img {
      width: 220px;
      height: 220px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #fff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .contact-email i {
      color: #212529;
      margin-right: 8px;
    }

/* 🌑 Updated Mobile Side Nav UI */
.mobile-nav {
  position: fixed;
  top: 0;
  right: -100%;
  width: 260px;
  height: 100vh;
  background-color: #111; /* 🖤 Deep black */
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
  color: #ff4c60; /* 🎯 Accent color */
  transform: translateX(4px);
}

.mobile-nav.show {
  right: 0;
}


.close-btn {
  position: absolute;
  top: 18px;
  right: 18px;
  font-size: 22px;
  border: none;
  background: transparent;
  color: #fff;
  transition: transform 0.2s ease;
}

.close-btn:hover {
  transform: rotate(90deg);
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


footer {
  background: #212529;
  color: white;
  text-align: center;
  padding: 20px;
  margin-top: auto;
}
  </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<button class="hamburger-btn d-md-none" onclick="toggleMobileNav()">
  <i class="fas fa-bars"></i>
</button>
<!-- 🧑🏻 Portfolio Content -->
<main class="container my-5 flex-grow-1">
  <div class="row align-items-center">
    <!-- 📝 Left Content -->
    <div class="col-md-6 text-center text-md-start">
      <p class="contact-email mb-3"><i class="bi bi-envelope-fill"></i> vvdarwin860@gmail.com</p>
      <div class="badge-bubble mb-2"><i class="bi bi-chat-dots-fill me-1"></i> It's me</div>

      <h1 class="mt-3">Sample<br>Villanueva</h1>
      <h2 class="text-muted">Junior Web Developer</h2>

      <p class="mt-3">Hello I am Darwin Villanueva. A passionate web developer who loves to build engaging websites using modern tools like HTML, CSS, JS, PHP, and MySQL.</p>

      <div class="d-flex justify-content-center justify-content-md-start gap-3 mt-4">
        <a href="https://m.me/darwin.villanueva.3781995" class="btn btn-outline-dark rounded-circle" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
        <a href="https://github.com/darwinweng2002" class="btn btn-outline-dark rounded-circle" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://discord.gg/Ts9FpXXM" class="btn btn-outline-dark rounded-circle" target="_blank"><i class="fab fa-discord"></i></a>
      </div>

      <button class="btn btn-primary mt-4 px-4 py-2">Let's Talk</button>
    </div>

    <div class="col-md-6 text-center mt-4 mt-md-0">
      <img src="assets/uploads/portfolio-image.jpeg" alt="Your Avatar" class="avatar-img">
    </div>
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
