
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- -----font awesome cdn link----- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- ----link css file----- -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

  <div class="container">

    <!-- ---------header-------- -->

    <header>
      <a href="index.php" class="logo">KyU<span> Virtual Campus</span></a>
      <div id="menu" class="fas fa-bars"></div>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="onlineide/onlineide.php">Online IDE</a>
        <a href="courses.php">Courses</a>
        <a href="about.php">About</a> -->
        <a href="login.php" class="btn1">Log in</a>
      </nav>
    </header>


    <!-- ---------------home -------- -->

    <section class="home">

      <div class="content">
        <h3>KyU Virtual Campus learning is a better way of learning</h3>
        <p>E-learning is a learning experience that is enhanced through utilizing computers and internet both outside and inside the facilities of the educational organization.</p>
        <a href="login.php" class="btn">Join Here</a>
      </div>

      <div class="image">
        <img src="images/home.jpg" alt="photo of a boy using computer">
      </div>

    </section>




    <!-- -----------slider viewer------------- -->

    <h1 class="heading" id="head">popular courses</h1>
    <section class="slider">

      <div class="slide-container active">
        <div class="slide">
          <div class="content">
            <h3>01. Website development</h3>
            <p>Web development is the work involved in developing a website for the Internet. <br> <br>
              Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript.</p>
            <a href="login.php" class="btn">learn more</a>
          </div>
          <div class="image">
            <img src="images/webimage.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <h3>02. app development</h3>
            <p>App Development refers to the creation of applications for use on devices such as desktop, tablets and smartphones. <br> <br> Mobile applications are designed and built for different operating systems.</p>
            <a href="login.php" class="btn">learn more</a>
          </div>
          <div class="image">
            <img src="images/appimage.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <h3>03. programming</h3>
            <p>Programming is the process of creating a set of instructions that tell a computer how to perform a task. <br><br> some Programming languages are JavaScript, Python, java and C++.</p>
            <a href="login.php" class="btn">learn more</a>
          </div>
          <div class="image">
            <img src="images/progimage.jpg" alt="">
          </div>
        </div>
      </div>

      <div id="prev" onclick="prev()">
        < </div>
          <div id="next" onclick="next()"> > </div>

    </section>





    <h1 class="heading" id="head">programming language</h1>

    <!-- ----------------programming------------- -->

    <section class="course">

      <div class="box">
        <img src="images/Python.png" alt="">
        <h3>Learn Python</h3>
        <p>Python is a high-level programming language designed to be easy to read and simple to implement. <br><br> It is open source, which means it is free to use, even for commercial applications.</p>
        <a href="login.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/java.jpg" alt="">
        <h3>learn Java</h3>
        <p>Java is a high-level, class-based, object-oriented programming language <br> <br> <br>
          that is designed to have as few implementation dependencies as possible.</p>
        <a href="login.php" class="btn">click here</a>
      </div>

      <div class="box">
        <img src="images/cpp.png" alt="">
        <h3>learn c++</h3>
        <p>C++ is a cross-platform language that can be used to create high-performance applications. <br><br> <br>
          created by Bjarne Stroustrup as an extension of the C programming language, </p>
        <a href="login.php" class="btn">click here</a>
      </div>

    </section>


    <!-- -----------footer section------------ -->

    <section class="footer">

      <div class="box-container">

        <div class="box">
          <h3>about</h3>
          <p>This is a platform where students can learn web development, app development & different programming languages through video tutorials.
            And student can also run their program using our website through Online IDE.This is free learning website.</p>
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
