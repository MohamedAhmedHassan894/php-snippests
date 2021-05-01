<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo " <h1> <center> <font color='#a52a2a' >  Part02 Day01 PHP </font> </center></h1>";

//    $name="Mirna";  $std="Mohamed";
//    echo $name, $std;   #print the value of the variable
//                # output the string value
//    echo "<br>";
//    echo ($std) ,($name);
//
//    echo "<br>";
//    print($name);    # output the string value  and return with 1 if printed

    #echo and print  ((print the value of the variable if it can be represented by string))

//    $n=10;
//    echo $n;
//
//    $arr=[3,5,"tt"];
//    echo $arr;

    #####################  Var_dump ##############
//    $x="10.10";
//    var_dump($x);  # dumps info about the var
//
//    $y=(int)$x;
//
//    var_dump($y);
//
//    $y=(bool)$y;
//
//    var_dump($y);

//        $str="abc";
//        var_dump($str);
//        $str=(int)$str;
//        var_dump($str);
//        $str=4444.88;
//        var_dump($str);

//        $str="10gg";
//        var_dump($str);
//        $str=(int)$str;
//        var_dump($str);

###################### Variable of variables ####################

    $hello="var1";
//    var_dump($hello);  # var1 ---> type string

    $var1= 44;
//    var_dump($var1);   # 44  ---> type int

//    echo $$hello;  # $helllo --> var1   (($var1))  #echo $var1

//
//    $$hello="welcome";  # $hello=var1     ===> $var="welcome";
//
//    echo $var1;


    ######################

//        $name="newname";
//        $$name="Noha";   # $newname="Noha"
//        echo $newname;

    ####################3
//    $x="rfff";
//    $y=3;
//    $z=$x**$y;  #warning (non numeric value)
//    var_dump($z);


//    $str1= "PHP is fruitful ";
//
//    $str2="I do love it";
//
//    $str3= $str1.$str2;
//
//    echo $str3;


//    $n=10; $m="10";    # == will give true
//                        # === will give false  (equal but not identical datatype)
//
//    echo "Prefix: " ;
//    echo ++$n;    #n=11  then print output will be 11
//
//    echo " <br> Postfix:   " ;
//    echo $m++;    #  ouput 10 then ++ (11)

//    echo "<br>";
//    echo $m;
//
//    $m++; #12
//    echo $m++; print ($m++) +1;


    # assign name  a value equal to the value inside merna
//    $merna=15;
//    $name=$merna;   # 2 different variables
//    var_dump($name);
//    var_dump($merna);
//
//    $merna= 20;
//    var_dump($name);
//    var_dump($merna);

    # reference operator
//    $amira=30;
//    $name= &$amira;   # this means that amira and name  refers to the same part of the memory
//
//    var_dump($amira);
//    var_dump($name);
//
//
//    $name="iti";
//
//    var_dump($amira);
//    var_dump($name);
//
//    $amira= True;
//
//    var_dump($amira);
//    var_dump($name);
//
//
//
//
//    $conn="localhost";
//    $con=&$conn;
//    $cn=&$conn;


//    $var1=55.555; #string   #float or double
//
//    echo gettype($var1);  #  double
//    var_dump($var1);  #float
//
//
//    #settype like casting
//    settype($var1,"int");
//
//    echo gettype($var1);

    ####################

    $nn=NULL;

//d
//    if(is_null($nn)){
//        echo "var= null";
//    }else{
//        echo "var != null";
//    }

//
//    $g="ggg";
//
//    if(is_numeric($g)){
//        echo "numeric";
//    }else{
//        echo "not numeric";
//    }

######################################

    $a;
    $b=False;
    $c=10;


//    var_dump(isset($a));   # isset will return false when variablename
//            #is decalared but not assigned any value or its value equal NULL
//            #or variable is not defined or declared
//    $a=NULL;
//    var_dump(isset($a));  # will return false
//    var_dump(isset($d));
    ###############################################3
//        var_dump(isset($b));  #isset will return TRUE if the variable is defined
//                           # and have value even if the value is one of the falsy values
//        #falsy values  ( False, '', "");
//        $b="";
//        var_dump(isset($b));
//
//        var_dump(isset($c));    # True
    ################################ Empty ##############################

//        $m;
//        $n=NULL;
//        $s="";
//        $w=False;
//        $t="text";
//
//        var_dump(empty($m));   # empty will return true if variable_name is decaled without value
//        var_dump(empty($n));# empty will return true if variable_name is decaled with NULL value
//        var_dump(empty($s)); # empty will return true with falsy value
//        var_dump(empty($w));   # will return true with falsy values
//
//        var_dump(empty($t));  #will return false if variable doesnot empty or have falsy value
//
//


//    for($i=0;$i<5;$i++){
//
//        if($i==3){
////            break;
////            continue;
//            exit;
//        }
//        echo $i. "<br>";   #. here for concatination
//    }
//
//    echo " <br> Out side the loop   Hello world";

//    $m=0;
//    while ($m<5){
//        echo $m."<br>";
//        $m++;
//    }


    $voucher=10;
    $recet=100;
    do{
        $recet= $recet-$voucher;
        echo $recet;
    }while($recet>500);
















