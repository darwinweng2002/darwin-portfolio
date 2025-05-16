<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact - Darwin Villanueva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #f4f4f4;
      font-family: 'Inter', sans-serif;
      height: 100%;
    }

    .contact-wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background-color: #fff; /* ⬅ match section bg */
    }

    .contact-section {
       flex-grow: 1;
      background-color: #fff; /* Ensures same bg as navbar */
      padding: 60px 20px;
    }
    
   nav.d-none.d-md-flex {
  background-color: #fff; /* Match contact-section */
}

    h2.section-title {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 32px;
      margin-bottom: 30px;
      text-align: center;
    }

    .form-control,
    .form-control:focus {
      box-shadow: none;
      border-color: #ccc;
      border-radius: 8px;
    }

    .contact-form button {
      width: 100%;
      border-radius: 8px;
    }

    .map-container iframe {
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 12px;
    }
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
    @media (max-width: 768px) {
      .map-container {
        height: 300px;
        margin-top: 30px;
      }
    }

    @media (min-width: 768px) {
      .map-container {
        height: 100%;
      }
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
      #customMap {
    height: 300px;
    width: 100%;
    border-radius: 8px;
    border: 1px solid #ccc;
  }
  </style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<!-- Hamburger -->
<button class="hamburger-btn d-md-none" onclick="toggleMobileNav()">
  <i class="fas fa-bars"></i>
</button>


<main class="contact-wrapper">
  <div class="contact-section container">
    <h2 class="section-title"><i class="fas fa-paper-plane me-2"></i>Get in Touch</h2>
    <div class="row g-4">
      <!-- Contact Form -->
     <!-- Contact Form -->
<div class="col-md-6">
<form class="contact-form needs-validation" id="contactForm" action="send.php" method="POST" novalidate>

  <!-- Name -->
  <div class="mb-3">
    <label class="form-label">Your Name</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fas fa-user"></i></span>
      <input type="text" name="name" class="form-control" required>
      <div class="invalid-feedback">Please enter your name.</div>
    </div>
  </div>

  <!-- Email -->
  <div class="mb-3">
    <label class="form-label">Your Email</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
      <input type="email" name="email" class="form-control" pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$" required>
      <div class="invalid-feedback">Enter a valid @gmail.com email address.</div>
    </div>
  </div>

  <!-- Subject -->
  <div class="mb-3">
    <label class="form-label">Subject</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fas fa-tag"></i></span>
      <input type="text" name="subject" class="form-control" required>
      <div class="invalid-feedback">Subject is required.</div>
    </div>
  </div>

  <!-- Message -->
  <div class="mb-3">
    <label class="form-label">Message</label>
    <div class="input-group">
      <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
      <textarea name="message" class="form-control" rows="5" required></textarea>
      <div class="invalid-feedback">Please write a message.</div>
    </div>
  </div>

  <button type="button" class="btn btn-dark w-100" id="submitBtn" disabled title="Form is currently disabled for demo purposes.">
    <span id="btnText"><i class="fas fa-paper-plane me-1"></i> Send Message</span>
    <span id="btnLoading" class="d-none"><i class="fas fa-spinner fa-spin me-2"></i> Sending...</span>
  </button>
</form>


  <!-- ✅ Contact Info & Social -->
  <div class="mt-5">
    <h5 class="fw-bold">Other Ways to Reach Me</h5>
    <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> vdarwin860@gmail.com</p>
    <p class="mb-3"><i class="bi bi-geo-alt-fill me-2"></i> PRMSU - Iba Campus, Zambales, Philippines</p>
    <div class="d-flex gap-3">
      <a href="https://m.me/darwin.villanueva.3781995" class="btn btn-outline-dark rounded-circle" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
      <a href="https://github.com/darwinweng2002" class="btn btn-outline-dark rounded-circle" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://discord.gg/yourserverinvite" class="btn btn-outline-dark rounded-circle" target="_blank"><i class="fab fa-discord"></i></a>
    </div>
  </div>
</div>


<div class="col-md-6 map-container">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.117987379319!2d119.97716597585863!3d15.36463588518271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396e3d9f8f6b0a3%3A0x4a46d008f18f0409!2sIba%2C%20Zambales!5e0!3m2!1sen!2sph!4v1715433330000!5m2!1sen!2sph"
    width="100%"
    height="100%"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>



    </div>
  </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function toggleMobileNav() {
    document.getElementById("mobileNav").classList.toggle("show");
  }

  document.addEventListener("DOMContentLoaded", function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    [...tooltipTriggerList].forEach(el => new bootstrap.Tooltip(el));
  });


document.getElementById('contactForm').addEventListener('submit', async function (e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);

  // Show loading SweetAlert
  Swal.fire({
    title: 'Sending...',
    html: 'Please wait while we deliver your message. <b></b>',
    timerProgressBar: true,
    allowOutsideClick: false,
    didOpen: () => {
      Swal.showLoading();
    }
  });

  try {
    const response = await fetch('send.php', {
      method: 'POST',
      body: formData
    });

    const text = await response.text();
    if (response.ok) {
      Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: text,
        timer: 3500
      });
      form.reset();
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops!',
        text: text || 'An error occurred. Try again later.'
      });
    }
  } catch (err) {
    Swal.fire({
      icon: 'error',
      title: 'Network Error',
      text: 'Could not connect to server.'
    });
  }
});
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm');
  const nameInput = form.querySelector('input[name="name"]');
  const emailInput = form.querySelector('input[name="email"]');
  const subjectInput = form.querySelector('input[name="subject"]');
  const messageInput = form.querySelector('textarea[name="message"]');

  // Gmail pattern only
  const gmailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

  // Real-time field validation
  function validateField(input, condition) {
    if (condition) {
      input.classList.remove('is-invalid');
      input.classList.add('is-valid');
    } else {
      input.classList.add('is-invalid');
      input.classList.remove('is-valid');
    }
  }

  nameInput.addEventListener('input', () => {
    validateField(nameInput, nameInput.value.trim().length >= 2);
  });

  emailInput.addEventListener('input', () => {
    validateField(emailInput, gmailPattern.test(emailInput.value.trim()));
  });

  subjectInput.addEventListener('input', () => {
    validateField(subjectInput, subjectInput.value.trim().length >= 2);
  });

  messageInput.addEventListener('input', () => {
    validateField(messageInput, messageInput.value.trim().length >= 5);
  });

  // Final check on submit
  form.addEventListener('submit', function (event) {
    const isFormValid = form.checkValidity();

    if (!isFormValid) {
      event.preventDefault();
      event.stopPropagation();
    }

    form.classList.add('was-validated');
  });
});
</script>
<?php include 'includes/footer.php'; ?>
</body>
</html>
