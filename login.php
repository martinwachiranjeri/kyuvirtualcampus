<?php
include_once("PHP\header.php");
session_start();
$error ='';
if (isset($_SESSION['errormsg'])){
    $error = $_SESSION['errormsg'];
}
?>
<body>

    <div class="container">
        <header>
            <a href="index.php" class="logo">KyU<span> Virtual Campus</span></a>
            <div id="menu" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="index.php">Home</a>
                <!-- <a href="courses.php">Courses</a>
                <a href="onlineide/onlineide.ph">Online IDE</a> -->
                <a href="about.php">About</a>
            </nav>

        </header>
    </div>

    <div class="contain">

        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <!-- -----------------------------------------Mejor Change for Add php -------------------------------------------------- -->

                    <!------------------------------------------Hear I link php login file ---------------------------------------------------- -->
                        <div><h4><?php echo  $error; ?></h4></div>
                    <form class="login" id="login" action="./PHP/loginAction.php" method="post">
                        <input type="text" class="input-box login-box" name="userid" placeholder="user id" required>
                        <input type="password" class="input-box login-box" id="password" name="password" placeholder="password" required>
                        <button type="submit" class="submit-btn login-box">SUBMIT</button>
                        <a href="#">forget password</a>
                    </form>
                    <button type="button"  class="btn1 " onclick="openRegister()"> REGISTER HERE</button>
                </div>
                <div class="card-back">

                    <h2>REGISTER</h2>

                    <!------------------------------------------Hear I link php Register file ---------------------------------------------------- -->

                    <form class="register" id="register" action="connect.php" method="post">
                        <input type="text" class="input-box" name="name" placeholder="your name">
                        <select class="input-box" name="gender">
              <option value="student">Select Gender</option>
              <option style="color: black; font-weight: 500;" value="male">Male</option>
              <option style="color: black; font-weight: 500;" value="female">Female</option>
            </select>
                        <input type="number" class="input-box" name="age" placeholder="your age">
                        <input type="number" class="input-box" name="mobilenumber" placeholder="mobile no">
                        <input type="email" class="input-box" name="email" placeholder="your email">
                        <input type="text" class="input-box" name="userid" placeholder="user id">
                        <input type="password" class="input-box" name="password" placeholder="create password">

                        <button type="submit" class="submit-btn register-submit" name="submit">register</button>
                    </form>
                    <button type="button" class="btn1" onclick="openLogin()"> i've an account </button>
                </div>
            </div>

            <!-- -----------------------------------------Mejor Change for Add php -------------------------------------------------- -->

        </div>
    </div>

    <section>

    </section>

    <script>
        var card = document.getElementById("card");

        function openRegister() {
            card.style.transform = "rotateY(-180deg)"
        }

        function openLogin() {
            card.style.transform = "rotateY(0deg)"
        }
    </script>

    <!-- ----- custom js file link----- -->

    <script src="js/main.js"></script>

</body>

</html>
<?php include("index.php");?>