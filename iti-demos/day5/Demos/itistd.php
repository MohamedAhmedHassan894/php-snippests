<?php
namespace iticlass1 {
    echo "this is iti class10";
    class ITIStudent
    {
        public $track;

        function printStudentInfo()
        {
        }

        function printChild()
        {
            echo " <br> Called from child";
        }

        function helloSayed()
        {
            echo " <br> hello from parent sayed";

            return "welcom";
        }

    }

}


namespace {
    function sayed(){
        echo "tyguhjokpl;rftgyjiopkdrtfgyji";
    }

    sayed();

//    function ($table_name,$values){  #associatave
//        foreach ($values as $value){
//
//        }
//
//        columnnames= array_keys($values);
//
//        #string concat
//    }

    function insert($name,$email,$passwd){
//        insert into students
    }


//    in database never try to bind the table name to the query

//        $quert="insert into :tablename values(:id)";
//        $stmt->bindParam(":tablename",$table_name);


}


















