<!doctype html>
<html class="no-js" lang="">
    <head>
    <title> Logged In Page </title>

    <h1> Welcome to the site! </h1>

    </head>

    <body>
    <?php
    $usName = $_POST["user"];
    $pword = $_POST["pass"];

    $myfile = fopen("passwords.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
     ?>


    </body>
</html>
