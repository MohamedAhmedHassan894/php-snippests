<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    #static members can be access without having object from class

    class TestStatic{
        public $name="ff";
        #static member
        public static $country="Egypt";

        #  constants are static variable by default
        const iti="Information Tech";

        #################

        static  function  printWelcome(){
            echo "print welcome";
        }


    }


    $s= new TestStatic();
    echo $s->name."<br>";
    echo TestStatic::$country;

    TestStatic::$country="Palystin";

    echo TestStatic::$country;

    echo TestStatic::iti;

    TestStatic::printWelcome();


