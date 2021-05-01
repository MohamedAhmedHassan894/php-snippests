<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();   #PHPSessionID for each user , cookie
    echo "Welcome to the server";

    //e22bquvi4h8gjpnh5gdsaf953j  #session_id  firefox
    //cscn6ubqf65kkq67tiurb0jl0d   #session_id   chrome

   # $_SESSION
    $_SESSION["username"]= "Noha";
    $_SESSION["course"]="PHP";
    $_SESSION["msg"]="Goodmorning";
        /*
            chrome
            session x
            $_SESSION["user1_id"]= "Noha";
            user 1   ()
             $_SESSION["user2_id"]= "Noha";
            uesr 2
        */

    var_dump($_SESSION);

    echo "Cookieeeeeeeee <br>";
    var_dump($_COOKIE);

    setcookie("msg","welcome",time()+3600);



