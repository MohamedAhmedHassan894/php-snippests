<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


echo "<h1> <center> <font color='blue'> Conneting to databses using mysqli OOP </font> </center> </h1>";


    #1- set connection credientionals
    define("DB_HOST","127.0.0.1");
    define("DB_USER","root");
    define("DB_PASSWORD","iti");
    define("DB_Name","opensource");
    define("DB_PORT","3306");

    $conn= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_Name,DB_PORT);

//    var_dump($conn);
    if($conn){
        $selQry="select * from student";

        $res=$conn->query($selQry);
//        var_dump($res);

//        $students=$res->fetch_all();
//        var_dump($students);

//        $row=$res->fetch_assoc();
//        var_dump($row);
//
//        $row=$res->fetch_object();
//        var_dump($row);
//
//        $num_rows=$res->num_rows;
//        var_dump($num_rows);


        #################################  insert
//        $insQry='Insert into `student`(`name`,`email`,`level`) Values("OOP","OOP@ff.com",55)';
//        $res=$conn->query($insQry);
//        var_dump($res);
//        var_dump($conn);

        ############################ update
//        $updQry='Update student set `name`="updateoop" where `id`= 104';
//        $upres=$conn->query($updQry);
//        var_dump($upres);
//        var_dump($conn);

        ############################ delete
//        $delQry='delete from student where `id`= 104';
//        $delres=$conn->query($delQry);
//        var_dump($delres);
//        var_dump($conn);


        ########################3 prepared stmt

        $instQry= 'Insert into `student`(`name`,`email`,`level`) Values (?,?,?)';
        $name="oppppp";  #string  --> s
        $email="ooop@gg.com";  #string  --> s
        $level=555;  # int --> i

        $stmt=$conn->prepare($instQry);   # object with prepared stmt type
        $stmt->bind_param("ssi",$name,$email,$level);
        $instRes=$stmt->execute();
        var_dump($instRes);
        var_dump($conn);
        $conn->close();
        var_dump($conn);

















    }








