<!-- 🔘 Hamburger Button (mobile only) -->
<button class="hamburger-btn d-md-none" onclick="toggleMobileNav()">
  <i class="fas fa-bars"></i>
</button>

<!-- 📱 Mobile Navigation Menu -->
<div id="mobileNav" class="mobile-nav">
  <button class="btn-close" aria-label="Close" onclick="toggleMobileNav()" style="position:absolute; top:20px; right:20px;"></button>
  <a href="works.php" class="d-block mb-3"><i class="bi bi-briefcase-fill me-2"></i>Works</a>
  <a href="https://drive.google.com/file/d/1ixXWdTUqjV3g4maDlzg_zPfe-O9r79K5/view?usp=sharing" target="_blank" class="d-block mb-3">
    <i class="bi bi-file-earmark-person-fill me-2"></i>Resume
  </a>
  <a href="about.php" class="d-block mb-3"><i class="bi bi-person-lines-fill me-2"></i>About</a>
  <a href="contact.php" class="d-block"><i class="bi bi-envelope-fill me-2"></i>Contact</a>
</div>

<!-- 💻 Desktop Navigation Menu -->
<nav class="d-none d-md-flex justify-content-end gap-3 p-3">
  <a href="works.php" class="btn btn-outline-dark rounded-circle fs-5 d-flex align-items-center justify-content-center"
     style="width: 48px; height: 48px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Works">
    <i class="bi bi-briefcase-fill"></i>
  </a>
  <a href="https://drive.google.com/file/d/1ixXWdTUqjV3g4maDlzg_zPfe-O9r79K5/view?usp=sharing" target="_blank"
     class="btn btn-outline-dark rounded-circle fs-5 d-flex align-items-center justify-content-center"
     style="width: 48px; height: 48px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Resume">
    <i class="bi bi-file-earmark-person-fill"></i>
  </a>
  <a href="about.php"
     class="btn btn-outline-dark rounded-circle fs-5 d-flex align-items-center justify-content-center"
     style="width: 48px; height: 48px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="About">
    <i class="bi bi-person-lines-fill"></i>
  </a>
  <a href="contact.php"
     class="btn btn-outline-dark rounded-circle fs-5 d-flex align-items-center justify-content-center"
     style="width: 48px; height: 48px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact">
    <i class="bi bi-envelope-fill"></i>
  </a>
</nav>
