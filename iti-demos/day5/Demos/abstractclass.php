<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    #### Abstract classes, --> You cannot take object from it. Cannot instantiate abstract class 'Person'
    # abstract class may contain abstract method or not
    # abstract method must be inside an abstract class
    # abstract method --> method without body

    abstract class Person{
        public $name;
        private $country;

        ###### abstract

        public abstract function testAbstract();

        function hello(){
            echo "Hello";
        }

    }

    class ITI extends Person{
            function testAbstract()
            {
                // TODO: Implement testAbstract() method.
                echo "implememted inside the child ";
            }

        function hello(){
            parent::hello();
            echo "this is the child";
        }
    }


    $p= new iti;
    $p->name="gg";
    var_dump($p);
