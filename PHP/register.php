<?php
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $mobilenumber = $_POST['mobilenumber'];
 $email = $_POST['email'];
 $userid = $_POST['userid'];
 $password = $_POST['password'];

 //dbconnection
 $conn = new mysqli("localhost","root","","kyu_virtual_campus");
 if($conn -> connect_error){
    die("connection faild : .$connect_error");
    else{
      $conn->prepare("insert into register(name, gender, age, mobilenumber,email,userid,password)
      values (?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param('sssisss'$name, $gender, $age, $mobilenumber, $email, $userid, $password);
      $stmt->execute();
     echo "Registration Successfull";
     $stmt->close();
     $conn->close();

    }
 }

 /* $server = "localhost";
  $username = "root";
  $password = "";
  $dbname  = "kyu_virtual_campus";

  $conn = mysqli_connect($server, $username, $password,$dbname,);

  if(!$conn)
  {
    die("connection to the detabase failed deu to". mysqli_connect_error());
  }
  // echo "string";

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $mobilenumber = $_POST['mobilenumber'];
  $email = $_POST['email'];
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  $sql = "INSERT INTO `kyu_virtual_campus`.`register` ('name`, `gender`, `age`, `mobilenumber`, `email`, `userid`, `password`) VALUES ('$name', '$gender', '$age', '$mobilenumber', '$email', '$userid', '$password');";

  echo $sql;

   if($con->query($sql)==true){
      echo "REGISTER Successfull";
   }else {
      echo "ERROR: $sql <br> $son->error";
   }

   $conn->close();*/

/*
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$userid = $_POST['userid'];
$password = $_POST['password'];


// // Database connection_aborted

// // test is the table name

   new mysqli('localhost','root','','test');
      if($conn->connect_error){
      die('Connection Failed :' $conn->connect_error);
    }else{
     $conn->prepare(("insert into registration(name, gender, age, mobilenumber,email,userid,password)
     values (?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("register",$name, $gender, $age, $mobilenumber, $email, $userid, $password);
     $stmt->execute();
     echo "Registration Successfull";
     $stmt->close();
     $conn->close();
    }
*/
?>
