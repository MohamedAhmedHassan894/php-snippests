<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


//    echo "This is a
//
//
//    multi
//    line
//
//    string";

//echo nl2br("This is a
//
//
//    multi
//    line
//
//    string") ;


//    $str="What's your name  hhh'fff ?";  #char encoding
//    echo $str. "<br>";
//
//    $str2=addslashes($str);
//    echo $str2."<br>";
//
//
//    $str3= stripslashes($str2);
//    echo $str3;
//


    $names=["Ahmed","Mohamed","Sayed","Amira","Khaked"];
//
//    $strnames= implode($names);
//    echo $strnames;

//$strnames= join($names);
//echo $strnames;

//$strnames= implode("@",$names);
//echo $strnames."<br>";
//
//$strnames= join(" $",$names);
//echo $strnames."<br>";
//
//
//        $a=explode(" $",$strnames);
//        var_dump($a);




//        $str="This is an\texampple\nsting function Technonize";
//
//        $tok=strtok($str,"m");
//        var_dump($tok);
//        var_dump($str);
//
//
//
//


//    $password="Atest";
//    echo $password."<br>";
////
//    $newpassword=md5($password);
//    //$newpassword=strstp(;;;;)
////
////    echo $newpassword;
////    var_dump($newpassword);
//
//    echo ord($password);

    #string follow the pattern, will return with the string else will return false

//    $nnemail=$_POST["elememnt_name"];
    $email="nshehab@iti.eg";
    $res=filter_var($email,FILTER_VALIDATE_EMAIL);
    var_dump($res);




























































