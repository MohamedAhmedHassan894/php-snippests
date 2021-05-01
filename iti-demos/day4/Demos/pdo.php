<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    # set credits
    $dsn="mysql:dbname=opensource;dbhost=127.0.0.1;dbport=3306";
    Define("DB_USER","root");
    Define("DB_PASS","iti");

    $db= new PDO($dsn,DB_USER,DB_PASS);
//    var_dump($db);
    if($db){
        #echo "Connected";


        ########## select query
//        $selQry="select * from student where id > 50";
//        $stmt=$db->prepare($selQry);
//        $res=$stmt->execute();
//        var_dump($res);  # true
//
//        # get info about the result
//            $numrows=$stmt->rowCount();
//            var_dump($numrows);
//        #fetch the result
////        $rows=$stmt->fetchAll();  # rows inform of array each array has column in two forms index,assoc
////        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);   #stmt fetch
////            var_dump($rows);
//
//        $rows=$stmt->fetchAll(PDO::FETCH_OBJ);   #fetch results as object
//        var_dump($rows);



        ###############333 bind param with ? operator
//        $id=100;
//        $name="Islam";
//        $selQry="select * from student where id <? and `name`= ?";
//        $stmt=$db->prepare($selQry);
//        $res=$stmt->execute([$id,$name]);
//        $students=$stmt->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($students);


        ####################### bind param with : operator
//        $id=100;
//        $name="noha";
//        $selQry="select * from student where `id`<:sid and `name`=:sname ";
//        $stmt=$db->prepare($selQry);
//        $stmt->bindParam(":sname",$name);
//        $stmt->bindParam(":sid",$id);
//        $stmt->execute();
//        $students=$stmt->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($students);

        ################################
        $name="a";
        $email="a@a.com";
        $level=4;

        $name=$_POST["name"];
        $email=$_POST["email"];

        $instQry="Insert into student (`name`,`email`,`level`) values (:sname,:semail,:slevel)";
        $instmt=$db->prepare($instQry);
        $instmt->bindParam(":semail",$email);
        $instmt->bindParam(":slevel",$level);
        $instmt->bindParam(":sname",$name);
        $res=$instmt->execute();
        var_dump($res);
        $rowCount=$instmt->rowCount();
        var_dump($rowCount);
        $lid=$db->lastInsertId();
        var_dump($lid);


        $db->close();







































    }else{
        echo "not connected";
    }

