<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modern Resume - John Doe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    :root {
      --primary-color: #343a40;
      --accent-color: #0d6efd;
      --text-muted: #6c757d;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      color: var(--primary-color);
    }

    #resume {
      background-color: #fff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
      padding: 2rem;
      border-radius: 10px;
    }

    .resume-header {
      background: var(--primary-color);
      color: #fff;
      padding: 2rem;
      border-radius: 10px 10px 0 0;
      text-align: center;
    }

    .resume-header h1 {
      font-size: 2.5rem;
      margin-bottom: 0.2rem;
    }

    .resume-header h5 {
      font-weight: 300;
    }

    .section-title {
      border-left: 4px solid var(--accent-color);
      padding-left: 0.5rem;
      margin-top: 2rem;
      font-size: 1.25rem;
      font-weight: 600;
    }

    .contact-box {
      border: 1px solid #dee2e6;
      padding: 1rem;
      border-radius: 5px;
      background-color: #f1f3f5;
    }

    ul.custom-list {
      padding-left: 1.2rem;
    }

    ul.custom-list li {
      margin-bottom: 0.5rem;
    }

    .shadow-box {
      background-color: #fff;
      padding: 1rem 1.5rem;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.06);
      margin-bottom: 1.5rem;
    }

    @media print {
      .d-print-none {
        display: none !important;
      }

      body {
        background: #fff !important;
        color: #000 !important;
      }

      #resume {
        box-shadow: none !important;
        padding: 0;
        border-radius: 0;
      }

      .resume-header {
        color: #000 !important;
        background: none !important;
        border-bottom: 2px solid #000;
      }
    }
  </style>
</head>
<body>

  <div class="container my-5" id="resume">
    
    <div class="resume-header">
      <h1>John Doe</h1>
      <h5>Full Stack Web Developer</h5>
      <button onclick="window.print()" class="btn btn-light mt-3 d-print-none">🖨️ Print Resume</button>
    </div>

    <!-- Contact Info -->
    <div class="contact-box my-4">
      <div class="row text-center text-md-start">
        <div class="col-md-4"><strong>Email:</strong> johndoe@email.com</div>
        <div class="col-md-4"><strong>Phone:</strong> +123-456-7890</div>
        <div class="col-md-4"><strong>LinkedIn:</strong> linkedin.com/in/johndoe</div>
      </div>
    </div>

    <!-- Summary -->
    <div class="shadow-box">
      <div class="section-title">🎯 Summary</div>
      <p>
        Passionate, detail-oriented Full Stack Developer with over 5 years of experience in building scalable web applications and dynamic user interfaces. Proficient in both frontend and backend development using PHP, MySQL, JavaScript, and modern frameworks.
      </p>
    </div>

    <!-- Skills -->
    <div class="shadow-box">
      <div class="section-title">🛠️ Skills</div>
      <ul class="row list-unstyled custom-list">
        <li class="col-md-3">HTML5 / CSS3</li>
        <li class="col-md-3">Bootstrap 5</li>
        <li class="col-md-3">JavaScript / jQuery</li>
        <li class="col-md-3">PHP / MySQL</li>
        <li class="col-md-3">RESTful APIs</li>
        <li class="col-md-3">Git / GitHub</li>
        <li class="col-md-3">Laravel (basic)</li>
        <li class="col-md-3">Responsive Design</li>
      </ul>
    </div>

    <!-- Experience -->
    <div class="shadow-box">
      <div class="section-title">💼 Experience</div>

      <h5 class="mt-3 mb-1">Senior Web Developer – ABC Solutions</h5>
      <p class="text-muted">Jan 2020 – Present</p>
      <ul class="custom-list">
        <li>Led the development of 10+ CMS projects using PHP and MySQL.</li>
        <li>Integrated REST APIs for dynamic content and services.</li>
        <li>Implemented performance optimization and security enhancements.</li>
      </ul>

      <h5 class="mt-4 mb-1">Frontend Developer – XYZ Tech</h5>
      <p class="text-muted">Jun 2017 – Dec 2019</p>
      <ul class="custom-list">
        <li>Developed UI components with Bootstrap, improving mobile UX.</li>
        <li>Collaborated with cross-functional teams in Agile workflows.</li>
      </ul>
    </div>

    <!-- Education -->
    <div class="shadow-box">
      <div class="section-title">🎓 Education</div>
      <p><strong>BSc in Computer Science</strong><br/>University of Somewhere, 2013 – 2017</p>
    </div>

    <!-- Certifications -->
    <div class="shadow-box">
      <div class="section-title">📜 Certifications</div>
      <ul class="custom-list">
        <li>Certified PHP Developer – XYZ Academy</li>
        <li>Responsive Web Design – freeCodeCamp</li>
      </ul>
    </div>

    <!-- Projects -->
    <div class="shadow-box">
      <div class="section-title">📁 Projects</div>
      <ul class="custom-list">
        <li><strong>Portfolio Website:</strong> Responsive showcase built with HTML/CSS/JS.</li>
        <li><strong>E-Commerce CMS:</strong> Full-stack PHP system with admin & login features.</li>
      </ul>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
