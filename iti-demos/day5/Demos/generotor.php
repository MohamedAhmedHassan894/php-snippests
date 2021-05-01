<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

//    function generateNums(){
//        for($i=0;$i<100;$i++){
//            $nums[]=$i;
//        }
//        return $nums;
//    }
//
//
//    $arr=generateNums();
//    var_dump($arr);


        #function getNums --? create object with generator type
        # save the start value, each time you iterate the generator, the value is displayed
    function genNums(){
            for($i=10;$i<100;$i++){
                yield $i;
            }
    }

    $nn=genNums();
    var_dump($nn);  # generator object


    foreach ($nn as $num){
        if($num <30){
            var_dump($num);
        }else{
            break;
        }
    }
