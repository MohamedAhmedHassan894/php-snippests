<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    $filename="phptrack.txt";


//    $type=filetype($filename);
//    echo $type;

 echo  file_exists($filename);

    if(file_exists("test.txt")){
        unlink("test.txt");
    }


//    $fhandle=fopen($filename,"r");
//
//    if($fhandle){
//
//        $line=fgets($fhandle);
//        echo $line. "<br>";
//
//        $line=fgets($fhandle);
//        echo $line. "<br>";
//
////        rewind($fhandle);   # reset the file pointer
//        fseek($fhandle,10);
//        $line=fgets($fhandle);
//        echo $line. "<br>";


//    }
