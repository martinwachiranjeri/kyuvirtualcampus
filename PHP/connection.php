<?php 

$dns ='mysql:host=localhost;dbname=kyu_virtual_campus';
$username ='root';
$password ='';
try {
    $conn = new PDO($dns,$username,$password);
} catch (PDOException $e) {
    echo $e;
}
?>