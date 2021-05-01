<?php

        var_dump($_POST);

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

    $dsn="mysql:dbname=opensource;dbhost=127.0.0.1;dbport=3306";
    Define("DB_USER","root");
    Define("DB_PASS","iti");

    $db= new PDO($dsn,DB_USER,DB_PASS);
    //    var_dump($db);
    if($db){

        echo "connected";

        $name=$_POST["name"];
        $email=$_POST["email"];
        $level=$_POST["level"];


        $instQry="Insert into student (`name`,`email`,`level`) values (:sname,:semail,:slevel)";
        $instmt=$db->prepare($instQry);
        $instmt->bindParam(":semail",$email);
        $instmt->bindValue(":slevel",66);
        $instmt->bindParam(":sname",$name);
        $res=$instmt->execute();
        var_dump($res);
        $rowCount=$instmt->rowCount();
        var_dump($rowCount);
        $lid=$db->lastInsertId();
        var_dump($lid);

        ##########################

        $selQry="select * from student";
        $stmt=$db->prepare($selQry);
        $res=$stmt->execute();
        #fetch the result
       $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
//       var_dump($rows);

       echo "<table border='33'> <tr> 
                        <th>
                            ID
                        </th>
                          <th>
                            Name
                        </th>
                          <th>
                            Email
                        </th>
                        </th>
                          <th>
                            level
                        </th>
                    </tr>";
       foreach($rows as $row) {

           echo "<tr> <td>" . $row["id"] . "</td>" .
               "<td>" . $row["name"] . "</td>" .
               "<td>" . $row["email"] . "</td>" .
               "<td>" . $row["level"] . "</td></tr>";
       }
       echo "</table>";



    }




