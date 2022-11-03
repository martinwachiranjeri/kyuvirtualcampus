<?php
session_start();
if (!isset( $_SESSION['currentUser'])){
header("location:./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course</title>

  <!-- -----font awesome cdn link----- -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- ----link css file----- -->

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container">
    <header>
      <a href="index.php" class="logo">KyU<span> Virtual Campus</span></a>
      <div id="menu" class="fas fa-bars"></div>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="onlineide/onlineide.php">Online IDE</a>
        <a href="programming/programming.php">Programming</a>
        <a href="app_dev/app_dev.php">App-dev</a>
        <a href="web_dev/web_dev.php">Web-dev</a>
        <a href="about.php">About</a>
        <a href="./PHP/logoutAction.php">Logout</a>

      </nav>

    </header>


    <!-- -----------courses--------------- -->


    <h1 class="heading" id="head">Best courses</h1>

    <section class="course">

      <div class="box">
        <img src="images/webdev.jpeg" alt="">
        <h3>Web development</h3>
        <p>Web development is the work involved in developing a website for the Internet. <br> <br> <br>
          Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript.</p>
        <a href="web_dev/web_dev.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/program.jpg" alt="">
        <h3>Programming</h3>
        <p>Programming is the process of creating a set of instructions that tell a computer how to perform a task. <br><br> some Programming languages are JavaScript, Python, java and C++.</p>
        <a href="programming/programming.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/appdev.png" alt="">
        <h3>app development</h3>
        <p>App Development refers to the creation of applications for use on devices such as desktop, tablets and smartphones. <br> <br> Mobile applications are designed and built for different operating systems.</p>
        <a href="app_dev/app_dev.php" class="btn">click here</a>
      </div>

    </section>

    <h1 class="heading" id="program">programming language</h1>


    <!-- ----------------programming------------- -->


    <section class="course">

      <div class="box">
        <img src="images/c.png" alt="">
        <h3>C Programming</h3>
        <p>C is a high-level and general-purpose programming language <br> <br> that is ideal for developing firmware or portable applications.</p>
        <a href="programming/c.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/Python.png" alt="">
        <h3>Learn Python</h3>
        <p>Python is a high-level programming language designed to be easy to read and simple to implement. <br> It is open source, which means it is free to use, even for commercial applications.</p>
        <a href="programming/python.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/java.jpg" alt="">
        <h3>learn Java</h3>
        <p>Java is a high-level, class-based, object-oriented programming language <br> <br>
          that is designed to have as few implementation dependencies as possible.</p>
        <a href="programming/java.php" class="btn">click here</a>
      </div>

    </section>


    <section class="course">

      <div class="box">
        <img src="images/cpp.png" alt="">
        <h3>learn c++</h3>
        <p>C++ is a cross-platform language that can be used to create high-performance applications. <br><br>
          created by Bjarne Stroustrup as an extension of the C programming language, </p>
        <a href="programming/cpp.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/js.png" alt="">
        <h3>Learn javascript</h3>
        <p>JavaScript is a fun and flexible programming language. <br> <br> It's one of the core technologies of web development and can be used on both the front-end and the back-end.</p>
        <a href="web_dev/javascript.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/kotlin.png" alt="">
        <h3>learn kotlin</h3>
        <p>Kotlin is an open-source statically typed programming language designed by JetBrains. <br> <br> It is object-oriented and supports functional programming features. </p>
        <a href="programming/kotlin.php" class="btn">click here</a>
      </div>

    </section>

    <h1 class="heading" id="head">Javascript & framework</h1>


    <!-- ----------------programming & framework------------- -->


    <section class="course">

      <div class="box">
        <img src="images/react.png" alt="">
        <h3>learn react js</h3>
        <p>React is a free and open-source front-end JavaScript library. <br> <br> React is used to build single-page applications. React allows us to create reusable UI components.</p>
        <a href="web_dev/reactjs.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/nodejs.png" alt="">
        <h3>learn node js</h3>
        <p>Node.js is an open-source, cross-platform, JavaScript runtime environment. <br> <br> <br> Node.js allows you to run JavaScript on the server. </p>
        <a href="web_dev/nodejs.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/django.jpg" alt="">
        <h3>Learn Django</h3>
        <p>Django is a Python-based free and open-source web framework that follows the model–template–views architectural pattern. <br> <br> it enables rapid development of secure and maintainable websites.</p>
        <a href="web_dev/django.php" class="btn">click here</a>
      </div>

    </section>


    <section class="course">

      <div class="box">
        <img src="images/angular.png" alt="">
        <h3>learn Angular</h3>
        <p>
          Angular is a platform and framework for building single-page client applications. <br> <br>
          for building mobile and desktop web applications using HTML and TypeScript. <br></p>
        <a href="web_dev/angular.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/program.jpg" alt="front end image">
        <h3>front-end project</h3>
        <p> it is the development of the graphical user interface of a website, using of HTML, CSS, and JavaScript. <br> so that users can view and interact with that website. </p>
        <a href="web_dev/frontend.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/backend.png" alt="backend photo">
        <h3>Full stack project</h3>
        <p>
          A Full Stack Developer is someone who works with the Back End — or server side — of the application. <br> <br> as well as the Front End, or client side. </p>
        <a href="web_dev/backend.php" class="btn">click here</a>
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
          <a href="about.php">About</a>
        </div>

        <div class="box">
          <h3>contact us</h3>
          <p><i class="fas fa-phone"></i> +254 709742000 | +254 728499650 </p>
          <p><i class="fas fa-envelope"></i> info@kyu.ac.ke</p>
          <p><i class="fas fa-map-marker-alt"></i> kirinyaga county , P.O box 143-10300 kerugoya Kenya.</p>
        </div>

      </div>

      <div class="credit">created with <i class="fas fa-heart"></i> by martin and lucy <span></span> computer science student</div>
    </section>
  </div>


  <!-- ----- custom js file link----- -->
  <script src="js/main.js"></script>

</body>

</html>
