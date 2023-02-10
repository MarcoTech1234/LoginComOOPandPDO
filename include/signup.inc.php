<?php

if(isset($_POST["submit"])) {

    // pegando a data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdReapeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instanciando SignupContr class

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $pwd, $pwdReapeat, $email);

    // Runnin erro handleds and user signup

    $signup->signupUser();

    // Going to back to front page

    header("location: ../index.php?erro=none");


}