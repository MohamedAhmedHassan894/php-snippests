<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    #loosely typed
    #staticly typed   #
    #strongly type   int, float
    #dynamicly typed

    # inheritance
    # child inherits all properties and functions from the parent
    # when you construct an object from the child you can find all the properties of the parent inside
    # only protected and public parent class members can be accessed inside the child class

    class Student{
        # attributes
        # identifiers (public, protected, private)
        public $name;
        protected $email;  #inside class and derived classes
        private $level;  # inside class
        private $country="Egypt";
        ##
        Const DAY="Wed";
        #methods or function

        #constructor ---> is special function called when you take an object from class
        # set default values inside the constructor


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
    //        $this->testfunction2();
    //        $this->testfunction();
        }
        ####
        protected function testfunction(){
            echo "<br> Test protected function";
        }
        private function testfunction2(){
            echo "<br> Test private function";
        }

//        function helloSayed(){
//            echo " <br> hello from parent sayed";
//        }

            function add(){
                    echo "add function from parent";
            }

    }
    # child class, derived class
    class ITIStudent extends Student {
        public $track;
//        private  $level="four";

        # overriding for the method in the parent
        # same function with the same signature ((changes are in body))
        function printStudentInfo()
        {
//            parent::printStudentInfo(); // TODO: Change the autogenerated stub
//            echo "<br>".$this->name." ".$this->email." ".$this->track." ".$this->getLevel();

//            echo "<br>".$this->name." ".$this->email." ".$this->track." ".$this->getLevel();

//            echo "<br>".$this->name." ".$this->email." ".$this->track." ".$this->getLevel();

        }

        #overrid
//        public function getlevel()
//        {
//
//            return $this->level;
//        }


        function printChild(){
            echo " <br> Called from child";
        }

        ######## overloading in the derived class
//        function helloSayed($g)
//        {
//            echo "<br> this is called from child ya sayed ".$g;
//        }
        function helloSayed(){
            echo " <br> hello from parent sayed";

            return "welcom";
        }

        #override
        function add()
        {
            echo " <br> I am the chlid <br>";
            parent::add(); // TODO: Change the autogenerated stub
            #protected function can be accessed inside the dirved
            $this->testfunction();
            # private cannot be accessed
//            $this->testfunction2();

        }

}


    $is= new ITIStudent();
    var_dump($is);
    //$is->printChild();
//    $is->name="Ali";
    $is->setEmail("ali@fff.com");
    $is->setLeveL(2000);
    $is->track="PHP";

    $is->printStudentInfo();
   echo $is->getLevel();


    var_dump($is->helloSayed());

    $is->add();


    #############################
    # problems of inheritance
    # php support only single inheritance  class iti-student can only inherit from one class
    #Python , c++ support multiple inheritance
    # Interfaces solved this problem


