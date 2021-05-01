<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//        echo "<h1>  <center> This day01 php  </center> </h1>";
//        #global scope
//        $age= 25;
//        $school= "iti";
//        $name= 15;
////        echo $name;
////        $name="Sayed";
////        echo "<br>";
////        echo $name;
////        echo "<br>";
////        $name=33.444;
//        echo $name;
//
//        $name= "Hello world";
//        echo "<br>";
//        echo $name ;
//
//        $age=44;
//        $school ="mcit";
//
//
//        #local scope
////
////        function printWelcome(){
////
////            #local scope
////            $newVar= " <br> Information technology institute";
//////            echo " <br> Hello world from a function ";
////            echo $newVar;
////        }
////
////        printWelcome();
//
//
////        echo $newVar;  # undefined variable newvar
//
//            function helloName($trackname){
//                echo "<br> this is value of name:  ";
//                echo $trackname;
//            }
//            helloName("Menofia");
////            echo $trackname;  #undefined variable
//
//        #global
//        #local
//        #parameter scope
//
//        #static


//        $course="PHP";   #global scope
//        $day= "sat";
//
//        function printCourse(){
//            global $course;
//            global  $day;
//            $day="Saturday";
//            echo $course;
//            echo "<br>";
//            echo $day;
//        }
//        echo $day;   # before calling the function
//        echo "<br>";
//        printCourse();
//        echo "<br>";
//        echo $day; # after calling the function


//            $year=2020;


            function printYear(){
                #local scope
                static $year= 2021;
                $year ++;
                echo $year;
                echo "<br>";
            }  # function block is destroyed
//
//            echo $year;
//            echo "<br> calling the function   " ;
            printYear();   #2022
//            echo "<br> calling the global variable  " ;
//            echo $year;
            printYear();  #2023
            printYear(); #2024

            #superglobal  #$_POST[]

            $_POST["name"]= "noha";
            function printTest(){
                $_POST["name"]="PHP";
                echo $_POST["name"];
            }
//            printTest();   #noha
//
//            echo $_POST["name"];  # PHP


            define("const1","Mohamed"); #constant name doesn't start with $

            echo const1;
            echo "<br>";
            function test(){
                echo const1;
            }

            test();
            echo ff;


        var_dump($ff);








