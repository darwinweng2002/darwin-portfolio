<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resume - John Doe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      color: #212529;
    }

    h1, h4, h5 {
      color: #000;
    }

    h4 {
      border-bottom: 2px solid #000;
      padding-bottom: 5px;
      margin-bottom: 15px;
    }

    ul {
      padding-left: 20px;
    }

    /* Hide print button when printing */
    @media print {
      .d-print-none {
        display: none !important;
      }

      body {
        background: white;
      }

      #resume {
        width: 100%;
        margin: 0;
        padding: 0;
      }
    }
  </style>
</head>
<body>

  <div class="container my-5" id="resume">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fw-bold">John Doe</h1>
      <button onclick="window.print()" class="btn btn-outline-dark d-print-none">🖨️ Print</button>
    </div>

    <h5 class="text-muted">Full Stack Web Developer</h5>
    <hr />

    <!-- Contact Info -->
    <section class="mb-4">
      <div class="row">
        <div class="col-md-4"><strong>Email:</strong> johndoe@email.com</div>
        <div class="col-md-4"><strong>Phone:</strong> +123-456-7890</div>
        <div class="col-md-4"><strong>LinkedIn:</strong> linkedin.com/in/johndoe</div>
      </div>
    </section>

    <!-- Summary -->
    <section class="mb-4">
      <h4>Summary</h4>
      <p>
        Results-driven and adaptable web developer with 5+ years of experience in designing, building, and maintaining responsive websites and web applications using modern technologies including PHP, MySQL, JavaScript, and Bootstrap.
      </p>
    </section>

    <!-- Skills -->
    <section class="mb-4">
      <h4>Skills</h4>
      <ul class="row list-unstyled">
        <li class="col-md-3">HTML5 / CSS3</li>
        <li class="col-md-3">Bootstrap 5</li>
        <li class="col-md-3">JavaScript</li>
        <li class="col-md-3">PHP / MySQL</li>
        <li class="col-md-3">Git / GitHub</li>
        <li class="col-md-3">REST APIs</li>
        <li class="col-md-3">jQuery</li>
        <li class="col-md-3">Laravel</li>
      </ul>
    </section>

    <!-- Experience -->
    <section class="mb-4">
      <h4>Experience</h4>
      <div class="mb-3">
        <h5>Senior Web Developer - ABC Solutions</h5>
        <p class="text-muted">Jan 2020 - Present</p>
        <ul>
          <li>Led backend development using PHP & MySQL to create scalable CMS.</li>
          <li>Optimized application speed by 40% using caching and query tuning.</li>
        </ul>
      </div>
      <div>
        <h5>Frontend Developer - XYZ Tech</h5>
        <p class="text-muted">Jun 2017 - Dec 2019</p>
        <ul>
          <li>Implemented responsive UIs using Bootstrap and JavaScript.</li>
          <li>Collaborated with UX team to improve user experience.</li>
        </ul>
      </div>
    </section>

    <!-- Education -->
    <section class="mb-4">
      <h4>Education</h4>
      <p><strong>BSc in Computer Science</strong><br />University of Somewhere, 2013 - 2017</p>
    </section>

    <!-- Certifications -->
    <section class="mb-4">
      <h4>Certifications</h4>
      <ul>
        <li>Certified PHP Developer – XYZ Academy</li>
        <li>Responsive Web Design – freeCodeCamp</li>
      </ul>
    </section>

    <!-- Projects -->
    <section class="mb-4">
      <h4>Projects</h4>
      <ul>
        <li><strong>Personal Portfolio:</strong> HTML/CSS/JS portfolio to showcase web projects.</li>
        <li><strong>Custom CMS:</strong> Built with PHP & MySQL including admin panel and login system.</li>
      </ul>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
