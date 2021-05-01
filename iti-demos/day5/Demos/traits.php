<?php

    # to solve multiple inheritance problem  (interfaces --> provides only function signatures)

    class Base {
        public $id=10;
    }

                trait printtt{
                   function printInfo(){
                        $this->var="abc";
                        echo "<br>".$this->id;
                        echo  "<br>".$this->name;
                        echo  "<br>".$this->email;
                        echo $this->country;
                    }
                    function sayhello(){
                        echo "hello";
                    }

                }
                class Person extends Base {
                    private $name="Noha";
                    private $email="Email";

                    use printtt;

                    # all the trait functions can be used by the class object

            //        function printInfo(){
            //            echo $this->id;
            //            echo $this->name;
            //            echo $this->email;
            //        }
                }
            $p= new Person();
            $p->printInfo();
            $p->sayhello();
            var_dump($p);


                class Student extends Base{
                    private $name="name";
                    private $email="yyuuu";
                    use printtt;

                }

                $s= new Student();
                $s->printInfo();
