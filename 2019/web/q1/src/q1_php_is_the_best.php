<?php
    // WEB 100
    // WEB Question 1
    // Name: PHP is the best!
    
    include("./q1_flag.php");

    $username = $_GET['username'];
    $password = $_GET['password'];

    $hashed_user = md5($username);
    $hashed_pswd = md5($password);

    if (isset($username) && isset($password) && strlen($username) >= 10 && strlen($password) >= 10){
        if ($username === $password){
            highlight_file(__FILE__);
            die("</br><h1>Review it</h1>");
        }elseif ($hashed_user == $hashed_pswd && $username == $hashed_user && $password == $hashed_pswd) {
            print("Here is your flag: ".$flag);
        }else{
            highlight_file(__FILE__);
            die("</br><h1>Review it</h1>");
        }
    }else{
        highlight_file(__FILE__);
        die("</br><h1>Review it</h1>");
    }

?>