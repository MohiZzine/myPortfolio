<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Experience</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="script.js" defer></script>
</head>

<body>
  <!-- Navbar -->
  <?php 
  $current = "experience";
  include 'header.php'
   ?>

  <!-- Experience -->
  <div class="bg-dark text-light p-4">
    <section class="preview">
      <div class="container-md">
        <div class="bg-info-subtle text-dark-emphasis text-center text-sm-start radius-5 mx-5 p-4">
          <h1 class=""><span class="text-primary mb-5">Story</span>
          </h1>
          <div class="container-md radius-3 border-black content">
            <div class="steps">
              <div class="steps-container">
                <div class="content">
                  <h2 class="lead text-center">Participated in the Global Quarantine Mathematical Olympiad Juniors
                    Section (GQMO)</h2>
                  <p>Due to COVID restrictions, the friendly-competition was
                    conducted online, scored 21 / 42 points possible,
                    equivalent to a "virtual" bronze medal.
                  </p>
                </div>
                <i class="step-line"></i>
                <div class="date text-center">May 2020</div>
              </div>
              <div class="steps-container">
                <div class="content">
                  <h2 class="text-center">Silver Medal in the Arabic Mathematical
                    Olympiad (AMO)
                  </h2>
                  <p>Scored 25 out of 40 points in the Arabic Mathematical Olympiad representing Morocco, equivalent to
                    a Silver medal.
                  </p>
                </div>
                <i class="step-line"></i>
                <div class="date text-center">Dec 2020</div>
              </div>
              <div class="steps-container">
                <div class="content">
                  <h2 class="text-center">Officially represented Morocco in the Asian Pacific Mathematical Olympiad
                    (APMO)
                  </h2>
                  <p>Scored 4 / 35 in the prestigious Asian Pacific
                    Mathematical Olympiad representing Morocco,
                    <a href="https://www.apmoofficial.org/country_report/MAR/2021" target="_blank"
                      rel="noopener noreferrer" class="link-primary">ranked Top 10 in the Moroccan Team.</a>
                  </p>
                </div>
                <i class="step-line"></i>
                <div class="date text-center">April 2021</div>
              </div>
              <div class="steps-container">
                <div class="content">
                  <h2 class="text-center">Silver Medal in the Pan-African
                    Mathematical Olympiad (PAMO)
                  </h2>
                  <p>Scored 24 / 42 in the most competitive African
                    Mathematical event representing Morocco.</p>
                </div>
                <i class="step-line"></i>
                <div class="date text-center">May 2021</div>
              </div>
              <div class="steps-container">
                <div class="content">
                  <h2 class="text-center">Runner-up in the Moroccan National
                    Mathematical Olympiad (NaMO)</h2>
                  <p>Ranked Top 7 in the Moroccan National Mathematical
                    Olympiad in the 2021 edition
                  </p>
                </div>
                <i class="step-line"></i>
                <div class="date text-center">June 2021</div>
              </div>
              <div class="steps-container">
                <div class="content">
                  <h2 class="text-center">Fully Funded Excellence Scholarship at
                    Mohammed VI Polytechnical University
                  </h2>
                  <p>Full Scholarship that covers all univeristy related fees based on academic excellence in the UM6P
                    School of Computer Science.</p>
                </div>
                <i class="step-line"></i>
                <div class="date text-center">Aug 2021</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <?php include "footer.php"?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>