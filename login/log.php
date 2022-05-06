<?php
 session_start();
include 'conn.php';



  if (isset($_POST['submit'])) {
    
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = " SELECT * FROM tbl_users WHERE name = '$username' AND pass = '$password'  ";

    $res = mysqli_query($conn , $sql);

    if ($res) {
        if (mysqli_num_rows($res)) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("location: ../index.php");

        }else{

            echo "You have enterned incorrect data...";
        }
    }
    else {
        echo "Not found";
    }

    
  }







?>
