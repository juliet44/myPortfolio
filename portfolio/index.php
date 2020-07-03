<?php

$msg = "";
$msgClass = '';
$error = "";
if (filter_has_var(INPUT_POST, 'submit')) {

  //get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);




  if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
    //passed   
    //check email 
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      //failed
      $msg = "Please use a valid Email!";
      $msgClass = "alert-danger";
    } else {
      //passed
      $toEmail = 'julietgachoki44@gmail.com';
      $subject = 'REF:' . $subject;
      $body = '<h2>Contact Request</h2>
              <h4>Name</h4><p>' . $name . '</p>
              <h4>Email</h4><p>' . $email . '</p>                           
              <h4>Message</h4><p>' . $message . '</p>
            ';

      //headers

      // Email Headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

      // Additional Headers
      $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        // Email Sent
        $msg = 'Your email has been sent';
        $msgClass = 'alert-success';
        $name = $email = $subject = $message = "";
      } else {
        // Failed
        $msg = 'Your email was not sent';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    //failed
    $error = "This field is required!";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Juliet Njeri</title>
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="app.css?v=version2">
  <link rel="stylesheet" href="slider.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="animation.css">
  <link rel="icon" href="images/icon.png">
</head>


<body>

  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>
  <!-- the navabr is here -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a id="brand" class="navbar-brand" href="#home"><span>J</span>uliet<span>.</span></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarTop">
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#test">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!--Landing Page-->
  <div id="home">
    <div id="intro" class="container">
      <div class="row" class="col-sm-12">
        <div class="col-m-6">
          <img src="images/myselftwo.jpg" width="150px" height="200px" alt="my profile" class="img-fluid">

        </div>
        <div class="col-6">
          <h4>Juliet N. Njeri</h4>
          <h2 class=".h2">WEB DEVELOPER.</h2>
          <hr>
          <blockquote class="blockquote"><small>
              <p class="mb-0"><small>I have not failed. I've just found 10000 ways that won't work.</small></p>
              <footer class="blockquote-footer">by <cite> Thomas A. Edison</cite></footer>
            </small>
          </blockquote>
        </div>
      </div>
    </div>
  </div>

  <!-- about us page -->

  <div id="about" class="hcontact padding">
    <div class="container-fluid row bg-white">
      <div class="col-sm-12">
        <h1 class="head">About <span> Me.</span></h1>
        <div class="aboutContent">
          <h4 class="m-4"><b>Hello! Am Juliet, A Web Developer.</b></h4>
          <p>My name is Juliet Njeri and most of my friends prefer to call me Juliet. I am web developer focused on crafting great web experiences. Designing and Coding has been my passion since the days I started working with computers.
            I enjoy creating beautifully designed, intuitive and functional websites. One of my dreams is to become a full-stack Developer and inspire other women in tech to break the barriers in tech.</p>
          <p>Want to know more about me? You can find me on <a href="https://www.linkedin.com/in/juliet-njeri-379475130/">Linkedin,</a> </p>

          <div id="icons" class="row mt-4">
            <div class=" col-sm mt-3">
              <i class="fas fa-desktop fa-3x m-3"></i>
              <p>Web Development</p>
            </div>
            <div class="col-sm mt-3">
              <i class="fas fa-network-wired  fa-3x m-3"></i>
              <p>Computer Networks</p>
            </div>
            <div class="col-sm mt-3">
              <i class="far fa-life-ring  fa-3x m-3"></i>
              <p>Support</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div id="resume" class="col-12  bg-light padding">
    <div class="container">
      <h1 class="hcontact head">My <span>Resume.</span></h1>
      <div class="row">
        <div id="frame" class="col-xl-4 col-lg-4 mb-30 border-right">
          <div>
            <img class="img-fluid" src="images/myself (2).jpg" width="350px" height="400px">
          </div>
          <div class="tab">
            <button id="educ"><i class="fas fa-graduation-cap"></i> Education</button><br>
            <button id="exp"><i class="fas fa-briefcase"></i> Experience</button><br>
            <button id="project"><i class="fas fa-th-list"></i> Skills</button>
          </div>
        </div>


        <div id="content" class="col-xl-8 col-lg-8">
          <div id="Education" class="tabContent">
            <h2>- Bachelor of Science in Computer Science</h2>
            <h5><i>Karatina University - 2019</i></h5>
            <p>Majored in software development. Successfully completed and graduated with a second class Honors Upper division. </p>


            <h2>- Routing and Switching</h2>
            <h5><i>Huawei Academy - 2019</i> </h5>
            <p>Gained foundational networking knowledge and the ability to install, configure, operate, and troubleshoot medium-size routed and switched networks.</p>

            <h2>- Mobile and Web Development</h2>
            <h5><i>Emobilis College - 2018</i> </h5>
            <p> Studied on how to create content and software for mobile handsets using technologies including JAVA & Android, PHP & MySQL, HTML5 and Bootstrap framework.</p>

            <h1>education</h1>
          </div>

          <div id="Experience" class="tabContent">
            <h2>- Zukabit Company Limited</h2>
            <h5><i>Graduate Trainee - 2020</i> </h5>
            <ul>
              <li>Intensive training in web design technologies through the guidance of the Lead Developer accompanied with development. </li>
              <li>Front-End programming using HTML, CSS and JavaScript. </li>
              <li>PHP and MySql programming.</li>
            </ul>
            <h2>- Nation Media Group</h2>
            <h5><i> Technical Support Intern - 2018</i> </h5>
            <ul>
              <li>1st Level technical support at the Service Desk to users.</li>
              <li>Administration of Mail Monitoring Software.</li>
              <li>Installation and configuration of end-user operationg systems and applications.</li>
              <li> Setting up new PC and printer hardware as per NMG configurations.</li>
              <li>Basic network support and troubleshooting.</li>
            </ul>

            <h1>experience</h1>
          </div>



          <div id="project " class="tabContent">


            <div class="row">
              <div class="col-sm-4">
                <img src="images/html.png" width="100px" height="100px">
                <p>Describe the contents and appearance of Web pages.</p>
              </div>
              <div class="col-sm-4">
                <img src="images/css.png" width="70px" height="100px">
                <p>Describe the presentation of Web pages, including colors, layout, and fonts.</p>
              </div>
              <div class="col-sm-4">
                <img src="images/js.png" width="90px" height="100px">
                <p>Create interactive websites that bring great user experience using JS Frameworks.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <img src="images/php.png" width="100px" height="100px">
                <p>Ability to manage dynamic content, databases and session tracking.</p>
              </div>
              <div class="col-sm-4">
                <img src="images/sql.png" width="100px" height="100px">
                <p>Perform update data on a database, or retrieve data from a database among other tasks.</p>
              </div>

              <div class="col-sm-4">
                <img src="images/press.png" width="100px" height="100px">
                <p>Ability to create flawless and functional wordpress websites.</p>
              </div>
            </div>

            <h1>my skills</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="test">
    <div class="container padding">
      <h1 class="hcontact head"><span>Testimonials</span></h1>
      <div id="testimonials" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#testimonials" data-slide-to="0" class="active"></li>
          <li data-target="#testimonials" data-slide-to="1"></li>
          <li data-target="#testimonials" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="image-area">
              <img src="images/nmg.png" alt="Nation Media Group">
            </div>
            <div class="carousel-caption">
              <h3>HR</h3>
              <h4>Nation Media Group</h4>
              <p>For the period that she was with us, she was a dedicated intern with good discipline, teamwork, focus, punctuality
                and also a good sense of decent dressing.Based on her performance, dedication and willingness to learn, I would strongly
                recommend her to any IT support role. </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="image-area">
              <img src="images/karu.png" alt="Karatina University">
            </div>
            <div class="carousel-caption">
              <h3>M. K</h3>
              <h4>Karatina University</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Hic doloribus nam quia adipisci vel quisquam quos quod! Dolorem unde, ad veritatis
                suscipit perspiciatis quo harum id, dicta eos modi maiores!</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="image-area">
              <img src="images/test.jpg" alt="...">
            </div>
            <div class="carousel-caption">
              <h3>Supervisor</h3>
              <h4>KNBS</h4>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Consequatur cumque minima nostrum blanditiis, dolor, facilis ad aut fuga
                autem consectetur numquam assumenda corrupti sint maiores facere, esse voluptatum beatae quibusdam.</p>
            </div>
          </div>
        </div>


        <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


  <div id="contact">
    <div class="container padding">
      <div id="headerContact">
        <h1 class="hcontact head">Get in<span> Touch!</span></h1>
      </div>

      <div class="row">
        <div class="col-md-7">
          <?php if ($msg != '') : ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
          <?php endif; ?>
          <div class="message">
            <div class="titleform">
              <h3 class="hcontact">Send a message</h3>
            </div>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactForm" class="justify-content-center">
              <div class="row">
                <div class="form-group col-2">
                  <label for="name">Name:</label>
                </div>
                <div class="form-group col-10">
                  <input class="form-control" type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                  <div class="error" id="namErr"><?php echo $error; ?></div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-2">
                  <label for="email">Email:</label>
                </div>
                <div class="form-group col-10">
                  <input class="form-control" type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                  <div class="error" id="emailErr"><?php echo $error; ?></div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-2">
                  <label for="subject">Subject:</label>
                </div>
                <div class="form-group col-10">
                  <input class="form-control" type="text" id="subject" name="subject" value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
                  <div class="error" id="subErr"><?php echo $error; ?></div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-2">
                  <label for="subject">Message:</label>
                </div>
                <div class="form-group col-10">
                  <textarea class="form-control" id="message" rows="3" name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                  <div class="error" id="messagErr"><?php echo $error; ?></div>
                </div>
              </div>

              <button type="submit" id="send" name="submit" class="button">SEND</button>
            </form>
          </div>
        </div>

        <div class="col-md-5">
          <div id="contactDetails" class="slide-in from-right">

            <h4>Email: info@julietnjeri.com</h4>
            <form>
              <button><a href="images/Juliet_Njeri_CV.pdf" download="Juliet_Njeri_CV">Download CV</a></button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- addd our footer -->
  <footer id="footer">

    <div class="container">

      <a href="https://www.linkedin.com/in/juliet-njeri-379475130/"><i class="fab fa-linkedin fa-lg"></i></a>
      <a href="https://github.com/juliet44"><i class="fab fa-git-square fa-lg"></i></a>
      <a><i class="fas fa-globe fa-lg"></i></i></a>


      <p> &copy;Copyright 2020</p>
    </div>

  </footer>



  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <script src="text.js">


  </script>


  <a href="#home" class="back-to-top"></a>

</body>

</html>