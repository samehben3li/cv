<?php include "bdc.php"; ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <script src="pd.js"></script>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/mdb.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.1" rel="stylesheet">
    <link href="css/main.css?ver=1.2.1" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body class="bg-light" id="top">
  <?php 
    $sql = "SELECT * FROM tab  ORDER BY id2 DESC LIMIT 0,1";
    $res = mysqli_query($conn,  $sql);
    if (mysqli_num_rows($res) > 0) {
      while ($tab = mysqli_fetch_assoc($res)) {  ?>
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="pt-4 clearfix">
          <h1 class="site-title mb-0"><?php echo $tab['name']." ".$tab["lastname"];?></h1>
          <div class="site-nav"> 
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#propos" title="About"><span class="menu-title">à propos</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#etudes" title="Skills"><span class="menu-title">études</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#experience" title="Experience"><span class="menu-title">Experience</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#competences" title="Education"><span class="menu-title">compétences</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#portfolio" title="Portfolio"><span class="menu-title">interests</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#propos" title="Contact"><span class="menu-title">Contact</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="resume-container">
  <div class="shadow-1-strong bg-white my-5" id="intro">
    <div class="bg-info text-white">
      <div class="cover bg-image"><img src="images/header-background.jpg"/>
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);backdrop-filter: blur(2px);">
          <div class="text-center p-5">
            <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong" src="uplo/<?php echo $tab['image_url'];?>" width="160" height="160"/></div>
            <div class="header-bio mt-3">
              <div data-aos="zoom-in" data-aos-delay="0">
                <h2 class="h1"><?php echo $tab['name']." ".$tab["lastname"];?></h2>
                <p><?php echo $tab['dome'];?></p>
              </div>
              <div class="header-social mb-3 d-print-none" data-aos="zoom-in" data-aos-delay="200">
                <nav role="navigation">
                  <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="<?php echo $tab['twi'];?>" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $tab['fac'];?>" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $tab['li'];?>" title="Github"><i class="fab fa-linkedin-in"></i><span class="menu-title sr-only">linkedin</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="d-print-none"><a id="download" class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3" href="myfile.pdf" data-aos="fade-right" data-aos-delay="700">télécharger mon CV</a><a class="btn btn-info btn-lg shadow-sm mt-1" href="#contact" data-aos="fade-left" data-aos-delay="700">modifier mon CV</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="propos">
    <div class="about-section">
      <div class="row">
        <div class="col-md-6">
          <h2 class="h2 fw-light mb-4">À propos de Moi</h2>
          <p><?php echo $tab['desc'];?></p>
        </div>
        <div class="col-md-5 offset-lg-1">
          <div class="row mt-2">
            <h2 class="h2 fw-light mb-4">contact</h2>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i>date de naissance</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $tab['ddn'];?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Email</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $tab['mail'];?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fab fa-linkedin-in"style="width:24px;opacity:0.85;"></i> Linkedin</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $tab['li'];?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Téléphone</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $tab['numt'];?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Adresse</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $tab['address'];?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="competences">
    <div class="skills-section">
      <div class="row">
        <div class="col-md-4">
          <h2 class="h2 fw-light mb-4">informatiques:</h2>
        </div>
        <div class="col-md-4">
          <h2 class="h2 fw-light mb-4">lagues:</h2>
        </div>
        <div class="col-md-4">
          <h2 class="h2 fw-light mb-4">interests:</h2>
        </div>
      <div class="row">
        <div class="col-md-4">
          <?php if ($tab['b1']!=''){?>
          <div class="mb-3"><span class="fw-bolder">HTML</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: <?php if ($tab['b1']!=''){echo '100';}else{echo '25';}?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['b1']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          <?php }?>
          <?php if ($tab['b2']!=''){?>
          <div class="mb-3"><span class="fw-bolder">CSS</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: <?php if ($tab['b2']!=''){echo '100';}else{echo '25';}?>%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['b2']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          <?php }?>
          <?php if ($tab['b3']!=''){?>
          <div class="mb-3"><span class="fw-bolder">JavaScript</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: <?php if ($tab['b3']!=''){echo '100';}else{echo '25';}?>%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['b3']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          
          <?php }?>
          <?php if ($tab['b4']!=''){?>
          <div class="mb-3"><span class="fw-bolder">WordPress</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: <?php if ($tab['b4']!=''){echo '100';}else{echo '25';}?>%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['b4']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="col-md-4">
          <?php if ($tab['c1']!=''){?>
          <div class="mb-3"><span class="fw-bolder">Anglais</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: <?php if ($tab['c1']!=''){echo '100';}else{echo '25';}?>%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['c1']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          <?php }?>
          <?php if ($tab['c2']!=''){?>
          <div class="mb-3"><span class="fw-bolder">Chinois</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: <?php if ($tab['c2']!=''){echo '100';}else{echo '25';}?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['c2']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          <?php }?>
          <?php if ($tab['c3']!=''){?>
          <div class="mb-3"><span class="fw-bolder">Français</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: <?php if ($tab['c3']!=''){echo '100';}else{echo '25';}?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['c3']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          <?php }?>
          <?php if ($tab['c4']!=''){?>
          <div class="mb-3"><span class="fw-bolder">Allemand</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: <?php if ($tab['c4']!=''){echo '100';}else{echo '25';}?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php if ($tab['c4']!=''){echo 'Master';}else{echo 'Beginner';}?></div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="col-md-4">
          <div class="mb-3 ">
            <?php echo $tab["s1"]; ?><br>
            <?php echo $tab["s2"]; ?><br>
            <?php echo $tab["s3"]; ?><br>
            <?php echo $tab["s4"]; ?><br>
            <?php echo $tab["s5"]; ?><br>
            <?php echo $tab["s6"]; ?><br>
            <?php echo $tab["s7"]; ?><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="experience">
    <div class="work-experience-section">
      <h2 class="h2 fw-light mb-4">Expérience professionnel:</h2>
      <div class="timeline">
        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="0">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Experience <span class="text-muted h6">& Stage</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div><?php echo $tab['exp'];?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="etudes">
    <div class="education-section">
      <h2 class="h2 fw-light mb-4">Formations & Certifications</h2>
      <div class="timeline">
        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">I learn  <span class="text-muted h6"> : </span>          </div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div><?php echo $tab['formation']; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4"><?php echo $tab['name'].' '.$tab['lastname']; ?></div>
          <div class="footer-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="<?php echo $tab['twi']; ?>" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $tab['fac']; ?>" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $tab['li']; ?>" title="Instagram"><i class="fab fa-linkedin-in"></i><span class="menu-title sr-only">linkedin</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="text-small">
          <div class="mb-1">&copy; aicha bayar. All rights reserved.</div>
        </div>
      </div>
    </footer>
    <?php }}?>
    <script src="scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="scripts/aos.js?ver=1.2.1"></script>
    <script src="scripts/main.js?ver=1.2.1"></script>
  </body>
</html>