<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Skills</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="script.js" defer></script>
  <script src="https://kit.fontawesome.com/10cf5ec651.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top">
    <div class="container-md">
      <a href="#" class="navbar-brand mx-4 mx-md-0">Mohieddine Farid</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="education.html" class="nav-link">Education</a>
          </li>
          <li class="nav-items">
            <a href="experience.html" class="nav-link">Experience</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">Skills</a>
          </li>
          <li class="nav-item">
            <a href="projects.html" class="nav-link">Projects</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Skills -->
  <section class="bg-dark text-light p-4" id="skills">
    <div class="container-md preview">
      <div class="content bg-info-subtle text-dark-emphasis text-center text-sm-start radius-5 mx-5 p-4">
        <h2><a href="#" class="link-primary mb-5">Skills</a></h2>
        <div class="container-md radius-3 border-black content prog-languages">
          <div class="section">
            <h2 class="text-primary mt-md-5">Programming</h2>
            <ul class="lh-lg">
              <li><strong class="title">Programming Languages:</strong> 
                <a href="https://en.wikipedia.org/wiki/C_(programming_language)" target="_blank" rel="noopener noreferrer" class="link-primary"> C/</a><a href="https://en.wikipedia.org/wiki/C%2B%2B" target="_blank" rel="noopener noreferrer" class="link-primary">C++</a>, Java, JavaScript (ES6), Python</li>
              <li><strong class="title">Web Development & Databases Languages:</strong> HTML5, XML, CSS3, PHP, SQL, MySQL</li>
              <li><strong class="title">Frameworks:</strong> JavaFX, Bootstrap, ReactJs</li>
            </ul>
            <div class="icons text-center">
              <i class="fa-brands fa-java fa-3x text-danger"></i>
              <img src="img/languages/python.png" alt="Python">
              <img src="img/languages/c-.png" alt="C++">
              <img src="img/languages/html-5.png" alt="HTML5">
              <img src="img/languages/css-3.png" alt="CSS3">
              <img src="img/languages/bootstrap.png" alt="Bootstrap">
            </div>
          </div>
          <div class="section">
            <h2 class="text-primary mt-md-1">Libraries</h2>
            <ul class="lh-lg">
              <li><strong class="title">Python Modules:</strong> Pandas, NumPy, Scikit-learn, Matplotlib, Tkinter</li>
              <li><strong class="title">JavaScript:</strong> DOM Manipulation</li>
              <li><strong class="title">Git/Github:</strong> Command line</li>
            </ul>
            <div class="icons text-center">
              <img src="img/languages/js.png" alt="JavaScript">
              <img src="img/languages/atom.png" alt="ReactJs">
              <img src="img/languages/deep-learning.png" alt="Deep Leaning">
              <img src="img/languages/github.png" alt="Github">
            </div>
          </div>
          <div class="section">
            <h2 class="text-primary mt-md-1">Problem Solving Skills</h2>
            <ul class="lh-lg">
              <li><strong class="title">National Mathematics Olympiad Competitor</strong></li>
              <li><strong class="title">Proficiency:</strong> Linear Algebra, Number Theory and Geometry (Euclidiean, Complex and projective geometry), Combinatorics and Probabilty</li>
              <li><strong class="title">Machine Learning & AI:</strong> Scikit-learn</li>
            </ul>
            <div class="icons text-center">
              <img src="img/languages/gold-medal.png" alt="Gold Medal">
              <img src="img/languages/block.png" alt="Geometry">
              <img src="img/languages/combinatorics.png" alt="Combinatorics">
            </div>
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