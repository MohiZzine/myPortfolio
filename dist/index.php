<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mohieddine Farid Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mate&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="script.js" defer></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top p-5">
    <div class="container-md">
      <a href="#" class="navbar-brand mx-4 mx-md-0">Mohieddine Farid</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item">
            <a href="#" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="education.php" class="nav-link">Education</a>
          </li>
          <li class="nav-items">
            <a href="experience.php" class="nav-link">Experience</a>
          </li>
          <li class="nav-item">
            <a href="skills.php" class="nav-link">Skills</a>
          </li>
          <li class="nav-item">
            <a href="projects.php" class="nav-link">Projects</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Homepage -->
<section id="showcase" class="bg-dark p-4">
  <div class="container-md">
    <div class="bg-info-subtle text-dark-emphasis text-center text-sm-start radius-5 mx-5 p-4">
      <h2><a href="#" class="link-primary mb-5">Homepage of Mohieddine Farid</a></h2>
      <div class="container-md radius-3 border-black content">
        <div class="d-flex align-items-center justify-content-center m-md-3">
          <img src="img/Medal.png" class="img-fluid w-100" alt="Mohieddine Farid">
          <div class="d-flex flex-column gap-2 preview p-4">
            <p class="lead text-danger-emphasis">“It’s hard to do a really good job on anything you don’t think
              about in the shower.” — Paul Graham</p>
            <p>I currently major computer science, I'm passionate about technology and human behavior, hard-worker and fast learner. I am hugely interested in Web Development (both Frontend and Backend). I love creating websites, doing random maths. I have some experience programming in many different languages such as Java, C/C++, Python and last but not least... Javascript.</p>
            <p>My <a href="http://" target="_blank" rel="noopener noreferrer" class="link-primary">CV</a> is here. These days, I’m interested in number theory, combinatorics, as well as backend development. </p>
          </div>
        </div>
        <div class="main">
          <p> I am on <a href="https://github.com/MohiZzine" target="_blank" rel="noopener noreferrer" class="link-primary">GitHub</a>, <a href="https://www.instagram.com/faridmohieddine/" target="_blank" rel="noopener noreferrer" class="link-primary">Instagram</a>, and <a href="#" target="_blank" rel="noopener noreferrer" class="link-primary">WordPress</a>. You can also see my personal page for trivia about myself.
          If you are a high school student interested in math olympiads, you may visit the beginner’s page, my collection of handouts, or my archive of past problems and solutions.</p>
          <p>I am studying Computer science engineering at Mohammed VI Polytechnical University.</p>

          <p>I do mathematics tutoring, and I have been successful in mathematical Olympiads. My deep understanding of mathematical concepts and passion for helping others succeed in their studies is the reason why I am (somehow) a successful tutor. My tutoring includes topics like algebra, linear algebra, geometry, number theory, combinatorics, and others. My experience includes working with students of all ages and skill levels, from elementary school to college. I specialize in breaking down complex concepts and making them easy to understand.</p>

          <p>In addition to tutoring, I also work as a freelance front-end web developer. I've got experience building and designing websites that are both visually pleasing and easy to use. I'm proficient in front-end technologies like HTML, CSS, and <a href="https://www.w3schools.com/js/js_es6.asp" class="link-primary">JavaScript ES6</a> and I enjoy bringing a project from design to a fully functional website.  I've created e-commerce websites, landing pages and other types of websites. I am also familiar with modern frameworks and libraries such as React and Vue.</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Footer -->
  <?php include "footer.html"?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>