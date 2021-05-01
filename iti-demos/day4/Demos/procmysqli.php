<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


echo "<h1> <center> <font color='blue'> Conneting to databses using mysqli procedural </font> </center> </h1>";


    #1- set connection credientionals
    define("DB_HOST","127.0.0.1");
    define("DB_USER","root");
    define("DB_PASSWORD","iti");
    define("DB_Name","opensource");
    define("DB_PORT","3306");

    #2- connect to the database using mysqli library (procedureal style)
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,
                    DB_Name, DB_PORT);
//    var_dump($conn);  #mysqli connection
    if($conn){
        $query="select * from student";
        # execute query
        $resQry=mysqli_query($conn,$query);
//        var_dump($resQry);
        # fetch result

//        $students=mysqli_fetch_all($resQry);
//        var_dump($students);

//        $row=mysqli_fetch_assoc($resQry);
//        var_dump($row);
//        echo $row["id"];    # first row  1
//
//        $rowobj=mysqli_fetch_object($resQry);
//        var_dump($rowobj);
//        echo $rowobj->id;    #second row   2
//
//        $row=mysqli_fetch_assoc($resQry);
//        var_dump($row);
//        echo $row["id"];

        while($row=mysqli_fetch_object($resQry)){
            $result[]=$row;
//            var_dump($row);
        }

//        $row=mysqli_fetch_assoc($resQry);
//        var_dump($row);
////        echo $row["id"];
//            var_dump($result);

        # get number of rows using function mysqli_num_rows($resultObject)
//        $no_of_rows=mysqli_num_rows($resQry);
//        var_dump($no_of_rows);
//        var_dump($conn);


        #######################################################################
        #insert

//        $insQry='Insert into `student`(`id`,`name`,`email`, `level`) Values("100","PHP","PHP@ff.com",10)';
//        $res=mysqli_query($conn,$insQry);
//        var_dump($res);

//        $insQry='Insert into `student`(`name`,`email`, `level`) Values("test","test@ff.com",10)';
//        $res=mysqli_query($conn,$insQry);
//        var_dump($res);    # true ---> query executed successfully ===

        #update
//        $updQry='Update student set `name`="Omar" where `id`= 100';
//        $upresult=mysqli_query($conn,$updQry);
//        var_dump($upresult);
//        var_dump($conn);

        #delete
//        $delQry='delete from student where id= 100';
//        $delres=mysqli_query($conn,$delQry);
//        var_dump($delres);
//        var_dump($conn);

        #prepared statement in PHP
//        $insQry='Insert into `student`(`id`,`name`,`email`, `level`) Values("100","PHP","PHP@ff.com",10)';
//        $res=mysqli_query($conn,$insQry);
//        var_dump($res);

        #template for the query
//        $instQry= 'Insert into `student`(`name`,`email`,`level`) Values (?,?,?)';
//
//        $name="uuuuuuuu";  #string  --> s
//        $email="uuu@gg.com";  #string  --> s
//        $level=10;  # int --> i
//
//        $stmt=mysqli_prepare($conn,$instQry);  #object type->mysqli prepared statement
//        # waiting the parameters to be passed
//        mysqli_stmt_bind_param($stmt,"ssi",$name,$email,$level);#the query is ready
//
//        $presutl=mysqli_stmt_execute($stmt);
//        var_dump($presutl);



        # update

        $name="Testtt";
        $email="test@test.com";
        $id=103;
        $update= 'Update student set name=?,email=? where id=?';

        $upstmt=mysqli_prepare($conn,$update);
        mysqli_stmt_bind_param($upstmt,"ssi",$name,$email,$id);
        $suc=mysqli_stmt_execute($upstmt);
        var_dump($suc);

        mysqli_close($conn);










































    }