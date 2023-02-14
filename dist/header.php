<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top p-5">
    <div class="container-md">
      <a href="#" class="navbar-brand mx-4 mx-md-0">Mohieddine Farid</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" <?php if ($current == "index") echo "class='nav-link active'"; else echo "class='nav-link'"; ?> >Home</a>
          </li>
          <li class="nav-item">
            <a href="education.php" <?php if ($current == "education") echo "class='nav-link active'"; else echo "class='nav-link'"; ?>>Education</a>
          </li>
          <li class="nav-items">
            <a href="experience.php" <?php if ($current == "experience") echo "class='nav-link active'"; else echo "class='nav-link'"; ?>>Experience</a>
          </li>
          <li class="nav-item">
            <a href="skills.php" <?php if ($current == "skills") echo "class='nav-link active'"; else echo "class='nav-link'"; ?>>Skills</a>
          </li>
          <li class="nav-item">
            <a href="projects.php" <?php if ($current == "projects") echo "class='nav-link active'"; else echo "class='nav-link'"; ?>>Projects</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>