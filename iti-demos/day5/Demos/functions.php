<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        echo "Functions and clousures";

        # clousure, anonymous function
//        function  (){
//            echo "Hello from function";
//        };

//        printhello();

//            function add($x,$y){
//                echo "<br>";
//                echo $x+$y;
//
//                return  function($name="Test") use($x,$y) {
//                    echo "<br> x = ". $x;
//                    echo "<br> y= ". $y;
//                    echo "Hello from function" .$name;
//                };
//            }
//            $return=add(4,6);
//            var_dump($return);
//            $return();  #clousure


    $welcome=function(){
        echo "<br> Welcome to day05";
    };

    $welcome();

















