<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <!-- -----font awesome cdn link----- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- ----link css file----- -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/about.css">
</head>

<body>

  <div class="container">

    <!-- --------------header section-------------- -->

    <header>
      <a href="index.php" class="logo">KyU<span> Virtual Campus</span></a>
      <div id="menu" class="fas fa-bars"></div>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <!--<a href="onlineide/onlineide.php">Online IDE</a>
        <a href="programming/programming.php">Programming</a>
        <a href="app_dev/app_dev.php">App-dev</a>
        <a href="web_dev/web_dev.php">Web-dev</a>
        <a href="courses.php">Courses</a>--->
        <a href="./PHP/logoutAction.php">Logout</a>

      </nav>

    </header>


    <!-- ===== ABOUT ===== -->

    <h2 class="subtitle">About</h2>
    <section class="about" id="about">

      <div class="image">
        <img src="images/group.jpg" alt="aboutMe">
      </div>

      <div class="content">
        <!-- <h3 class="subtitle" >E-learning</h3> -->
        <p> <b> I am Final year Computer Science  Student, Web Development Enthusiast. it is my final year project. (a responsive virtual learning platform) <br> <br>
            This is a platform where students can learn web development, app development & different programming languages through video tutorials.<br> <br>here we provide videos of programming languages such as C, C++, JAVA, PYTHON, KOTLIN, SWIFT,
            PHP etc. <br> <br> I also uploaded web development tutorials such as HTML, CSS and JAVASCRIPT videos. <br> </b>
        </p>
      </div>
    </section>


    <!-- --------------contact section------------ -->


    <section class="contact" id="contact">
      <div class="title">
        <h2 class="titletext"> <span>C</span>ontact Us</h2>
        <p>If you have any query, you can contact Us.</p>
      </div>
      <div class="contactForm">
        <h3>Send Message</h3>
        <div class="inputBox">
          <input type="text" placeholder="Name">
        </div>
        <div class="inputBox">
          <input type="text" placeholder="Email">
        </div>
        <div class="inputBox">
          <textarea placeholder="Type Your Text"></textarea>
        </div>
        <div class="inputBox">
          <input type="Submit" value="Send">
        </div>

      </div>

    </section>


    <!-- -----------footer section------------ -->


    <section class="footer">

      <div class="box-container">
        <div class="box">
          <h3>about</h3>
          <p>This is a website where students can learn web development, app development & different programming languages through tutorials videos.
            And student can also run their program using our website through Online IDE.This is free learning website.</p>
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="index.php">Home</a>
          <a href="onlineide/onlineide.php">Online IDE</a>
          <a href="programming/programming.php">Programming</a>
          <a href="app_dev/app_dev.php">App-dev</a>
          <a href="web_dev/web_dev.php">Web-dev</a>
          <a href="courses.php">Courses</a>
        </div>

        <div class="box">
          <h3>contact us</h3>
          <p><i class="fas fa-phone"></i> +254 709742000 | +254 728499650 </p>
          <p><i class="fas fa-envelope"></i> info@kyu.ac.ke</p>
          <p><i class="fas fa-map-marker-alt"></i> kirinyaga county , P.O box 143-10300 kerugoya Kenya.</p>
        </div>

      </div>

      <div class="credit">created with <i class="fas fa-heart"></i> by martin <span></span> computer science student</div>
    </section>


  </div>


  <!-- ----- custom js file link----- -->
  <script src="js/main.js"></script>

</body>

</html>
