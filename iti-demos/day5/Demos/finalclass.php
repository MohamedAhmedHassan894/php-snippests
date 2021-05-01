<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    #final class-> class cannot be inherited

    #final function --> function cannot be overridden

    class Book{
        public $name;
        private $author="Noha";

        final function printBook(){
            echo $this->name." ".$this->author;
        }

    }

    class B extends Book{

//        function printBook(){
//           echo "override";
//        }

    }

    $b= new B;
    $b->name="book";
    $b->printBook();