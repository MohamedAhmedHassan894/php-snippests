<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $filename="phptrack.txt";
    # open file
    $handle=fopen($filename,"r");
    # read line from the file

        #feof($handle)   # check if the end of file (EOF) is reached

        while(!feof($handle)){
            $line=fgets($handle);  # read line  #line length 5
            echo $line. "<br>";
        }

//    $line=fgets($handle);  # read line from the file starting from the beginning
//    echo $line. "<br>";
//
//    $line=fgets($handle);  # read line
//    echo $line. "<br>";
//
//    $line=fgets($handle);  # read line
//    echo $line. "<br>";
//
//
//    $line=fgets($handle);  # read line
//    echo $line. "<br>";











