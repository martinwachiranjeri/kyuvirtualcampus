<?php
include './connection.php';
if ( $_SESSION['errormsg']) {
  session_reset();
}
session_start();
  $userid = $_POST['userid'];
  $password = $_POST['password']; 
  $sql = 'SELECT * FROM register WHERE userid = :userid AND password =  :password';
  $stm = $conn->prepare($sql);
  $stm->execute([":userid"=>$userid,":password"=>$password]);
  $rcount=$stm->rowCount();
  echo  $rcount;
  if ($rcount > 0 ) {
     header("location:../courses.php");
     $_SESSION['currentUser']= $userid;
  } else {
    $_SESSION['errormsg'] = 'WRONG CREDENTIALS!';
    header("location:../login.php");
  }

  
?>
