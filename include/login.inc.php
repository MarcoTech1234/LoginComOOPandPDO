<?php

if(isset($_POST["submit"])) {

    // pegando a data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];


    // Instanciando SignupContr class

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $login = new LoginContr($uid, $pwd);

    // Runnin erro handleds and user signup

    $login->LoginUser();

    // Going to back to front page

    header("location: ../index.php?erro=none");


}