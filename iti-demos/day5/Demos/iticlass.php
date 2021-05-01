<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class Student{
        # attributes
        # identifiers (public, protected, private)
        public $test="ggg";
        public $name;
        protected $email;  #inside class and derived classes
        private $level;  # inside class
        private $country="Egypt";
        ##
        Const DAY="Wed";
        #methods or function

        #constructor ---> is special function called when you take an object from class
        # set default values inside the constructor
//        function __construct(){
//                $this->name="test";
//                $this->email="test@test.com";
//                $this->level=4;
//        }

//        function __construct($name,$email){
//            $this->name=$name;
//            $this->email=$email;
//        }

        function __construct($name="test",$email="test"){
                $this->name=$name;
                $this->email=$email;
        }


        #You need setters and getters for the private and protected variables
        #by default all functions inside class are public
        function setEmail($email){
            $this->email=$email;
        }
        function getEmail(){
            return $this->email;
        }
        function setLeveL($level){
            $this->level=$level;
        }
        function getLevel(){
            return $this->level;
        }

        #####################
        function printStudentInfo(){
            echo $this->name." ".$this->email." ".$this->level." ".$this->country;
            $this->testfunction2();
            $this->testfunction();
        }
        ####
        protected function testfunction(){
            echo "<br> Test protected function";
        }
        private function testfunction2(){
            echo "<br> Test private function";
        }

        ############
        function callClosure(){
            return function(){
                echo $this->test;
            };
        }

    }


//    $s= new Student();
//    var_dump($s);
    # will use object to access the class members
//    $s->name="Noha";
//    $s->setEmail("nshehab@iti.gov.eg");
//    $s->setLeveL(4);
//    var_dump($s);
//    echo $s->name."<br>";
//    echo $s->getEmail()."<br>";
//    echo $s->getLevel()."<br>";
//    echo $s->printStudentInfo();

//    echo "<br> this is the second object <br>";
//    $m= new Student();
//    var_dump($m);
////    $m->printStudentInfo();
///
//    $test= new Student("noha","ff@gg.com");
//    var_dump($test);

    $obj2= new Student();
//    var_dump($obj2);

    $obj2= new Student("yyy");
//    var_dump($obj2);

    $obj3= new Student("fff","gggg");
//    var_dump($obj3);


//    $obj2->printStudentInfo();

    ##########################################
//    $clousre=function(){
//        echo "this is a clousure ";
//    };
//    #bind a closure to the class
//    $objclosure=$clousre->bindTo($obj3);
//    var_dump($objclosure);
//    $objclosure();
//    $obj3->name="nohaaaamm";


//    $objclo=$trimClosure->bindTo($obj3);
//    var_dump($objclo);
//    $objclo();

//    var_dump($obj3);



//    class Test{
//        public $email;
//        public $name="nnnuhgjhg";
//    }
//    $t= new Test;
//    $g=$trimClosure->bindTo($t);
//    $g();

    ####################

//    $callclo=$obj2->callClosure();
//    var_dump($callclo);
//    $callclo();

    $fff= function(){
        unset($this->test);
        $trimmed=trim($this->name," nm");
        echo $trimmed;
    };

    $fff->call($obj2);  # will call the clousure with the object directly.
    ##############################3
    $tt=$fff->bindTo($obj2);
    $tt();





