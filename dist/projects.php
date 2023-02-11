<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Projects</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="script.js" defer></script>
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
            <a href="skills.html" class="nav-link">Skills</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">Projects</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Projects -->
  <section class="bg-dark text-light p-4">
    <div class="container-md text-center text-sm-start">
      <div class="bg-info-subtle text-dark-emphasis text-center text-sm-start radius-5 mx-5 p-4">
        <h2 class=""><a href="#" class="link-primary mb-3">Projects</a></h2>
        <div class="container-md radius-3 border-black content">
          <div class="d-flex flex-column gap-3">
            <div class="d-md-flex align-items-center justify-content-between project gap-md-3">
              <div class="description mt-sm-3">
                <h2 class="fw-bold text-primary"><a href="https://github.com/MohiZzine/Chess-App" target="_blank"
                    class="link-primary">Chess Game Application</a></h2>
                <p class="lh-base">Built and Designed a Chess Application using mainly Java and JavaFX framework,
                  implements basic and advanced chess rules, with custom themes.
                  Languages and technologies used:
                <div class="technologies lead">
                  <dl>
                    <dt class="text-danger">Java Programming Language</dt>
                    <dd>
                      Object Oriented Programming
                    </dd>
                    <dt class="text-danger">JavaFX framework</dt>
                    <dd>
                      Designing Interfaces (Landing Result page)
                    </dd>
                    <dt class="text-danger">CSS (recommended)</dt>
                    <dd>Although it is not required, some knowledge of CSS attributes is recommended. </dd>
                  </dl>
                </div>
                See the <a href="https://github.com/MohiZzine/Chess-App" class="link-primary">README file in Github
                </a>for a more info.</p>
              </div>
              <div class="image">
                <img src="img/Chess.png" class="img-fluid" alt="Chess Application">
              </div>
            </div>
            <hr>
            <!-- <div class="d-md-flex align-items-start justify-content-evenly project gap-md-3">
              <div class="description mt-sm-1">
                <h2 class="fw-bold text-info"><a class="link-primary" href="#" target="_blank"
                    rel="noopener noreferrer">ML model for the TSP Problem</a></h2>
                <p class="lh-base">Used Reinforcement Learning to create a Deep Leaning model solving the TSP problem.
                  Technologies used:
                <div class="technologies">
                  <dl>
                    <dt class="text-danger">Python Programming Language</dt>
                    <dd>
                      Machine learning : Scikit-learn(train_test_split...)
                    </dd>
                    <dt class="text-danger">Pandas and Numpy modules</dt>
                    <dd>
                      Dataset Manipulation.
                    </dd>
                  </dl>
                </div>
                See the
                <a href="#" target="_blank" rel="noopener noreferrer" class="link-primary">Github repository</a>
                for more info.
                </p>
              </div>
            </div>
            <hr> -->
            <div class="d-md-flex align-items-start justify-content-between project preview gap-md-3">
              <div class="description mt-sm-1">
                <h2 class="fw-bold text-info"><a class="link-primary" href="https://Github.com/MohiZzine/MyPortfolio"
                    target="_blank" rel="noopener noreferrer">My Portfolio Website</a></h2>
                <p class="lh-base">The page you are surfing right now! <br>
                  Programming languages and Technologies used:
                <div class="technologies lead">
                  <dl>
                    <dt class="text-danger">HTML</dt>
                    <dd>
                      Dislpaying Text
                    </dd>
                    <dt class="text-danger">CSS</dt>
                    <dd>
                      Styling the page (colors, spacing, menus)
                    </dd>
                    <dt class="text-danger">Bootstrap</dt>
                    <dd>
                      A CSS framework with home-made colors and classes
                    </dd>
                  </dl>
                </div>
                See the <a href="https://Github.com/MohiZzine/MyPortfolio" class="link-primary" target="_blank">Github
                  repository</a> for the source code.</p>
              </div>
              <div class="image">
                <img src="img/me.png" class="img-fluid" alt="My Portfolio">
              </div>
            </div>
            <hr>
            <div class="d-md-flex align-items-start justify-content-between project preview gap-md-3">
              <div class="description mt-sm-1">
                <h2 class="fw-bold text-info"><a class="link-primary" href="https://github.com/MohiZzine/EcommerceStore"
                    target="_blank" rel="noopener noreferrer">Ecommerce Store</a></h2>
                <p class="lh-base">A <strong>responsive</strong> online grocery store with both front-end and back-end.
                  We used:
                <div class="technologies">
                  <dl>
                    <dt class="text-danger">HTML, CSS, Bootstrap</dt>
                    <dd>
                      Text (HTML), responsive styling (CSS and Bootstrap) and user validation (JS)
                    </dd>
                    <dt class="text-danger">MySQL & PHP</dt>
                    <dd>
                      Created the entire login/sign-up system
                    </dd>
                    <dt class="text-danger">SQL</dt>
                    <dd>
                      For databases. Well, I didn't contribute much here tbh...
                    </dd>
                  </dl>
                </div>
                Since this was my first full-stack project, we (yes we were a group) violated the <a
                  class="link-primary" href="https://www.digitalocean.com/community/tutorials/what-is-dry-development"
                  target="_blank" rel="noopener noreferrer">DRY principle</a> so the code is not what you would qualify
                as <em>"good"</em>. See the <a href="https://Github.com/MohiZzine/" class="link-primary"
                  target="_blank">Github repository</a> for the source code.</p>
              </div>
              <div class="image my-3">
                <img class="img-fluid" src="img/homepage.png" alt="Grocery Store">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include "footer.html"?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>