<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    #define array (simple array === indexed array)

    $arr1=[1,2,3,4,5,6];  # index 0,5

    $arr2=array("a","b","c","d");  #index 0 ,3

    # index in the array start from 0.

    # to access the elements of the array
//    echo $arr1[2] ."<br>";
//    echo $arr2[3]."<br>";

//    var_dump($arr2);

    # php allow mixed datatypes inside array

    $arr3=["a",1,True,5555.666, "gggg"];
//    var_dump($arr3);

    # display elements of the array
//    print_r($arr3);


//    for($i=0; $i<5; $i++){
//        echo $arr3[$i]."<br>";
//    }
//    var_dump(count($arr3));
//
//    for($i=0; $i<count($arr3); $i++){
//        echo $arr3[$i]."<br>";
//    }

#foreach --> looping way in php

//    foreach ($arr3 as $item){
//        echo $item. "<br>";
//    }

    #####################

        #range function

//       $nums= range(0,10,2);   #return array
//
//        var_dump($nums);
//
//        $alpha= range("a","z",3);   #return array
//
//        var_dump($alpha);


    ########## Associative array

//    $arr=["fff",55,66.666,False];
//
////    echo $arr[1];   # 55
//
//    # use keys instead of the indexex
//        # key value pair
//    $info=[
//        "Name"=>"Noha",
//        "age"=>28,
//        "study"=>"Masters",
//        "work"=>"ITI"
//    ];
//
//    echo $info["Name"]."<br>";
//    echo $info["age"]."<br>";
//
//    $info["study"]="Masters at faculty of engineering";
////    echo $info["study"]."<br>";
//    $info["email"]="nshehab@iti.gov.eg";
////    echo $info["email"]."<br>";
//    var_dump($info);
//    # key can be a number inside the associative array
//    $info[10]="test";
//    var_dump($info);
//
//    #foreach
//
////    foreach ($info as $key=>$value){
////        echo $key. " = ". $value. "<br>";
////    }
//
//    foreach ($info as $item){
//          echo $item. "<br>";
//        }

//    $multi=["fff","ggg",55,["a","b"]];
//
//    var_dump($multi);
//
//    $info=[
//        "Name"=>"Noha",
//        "age"=>28,
//        "study"=>"Masters",
//        "work"=>"ITI",
//        "courses"=>["PHP","Python","Linux","Ruby","Scala"]
//    ];
//
//    var_dump($info);
//
//    echo $info["courses"][2];

//
//    $name="Noha";
//    $email="nnn@ggg.com";
//
//    $infoo=compact("name","email");
//
//    var_dump($infoo);
//

    ####################
    $arr3=["a",1,True,5555.666, "gggg"];

//    $arr3[5]="Mohamed";
//    var_dump($arr3);
//    exit;

    $arr=["fff",55,66.666,False,"item","item2","item3"];

    $info=[
            "Name"=>"Noha",
            "age"=>28,
            "study"=>"Masters",
            "work"=>"ITI"
        ];

    $arr4= $arr3 + $info;

    var_dump($arr4);























