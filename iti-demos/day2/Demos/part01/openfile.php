<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo " <h1> <font color= purple> <center> Opening file using PHP  </center> </font> </h1>";

    #to open the file for read
    $filename="phptrack.txt";
    $file=fopen($filename,"r");   # resource stream object >>> file
    # file not exist will return false
    if($file){
//        var_dump($file);
        # to read from file
        #1- get filesize
            $fsize=filesize($filename);    # filename  ---> file path
//            var_dump($fsize);
            $readtxt=fread($file,$fsize);   # fread returns with text
//            var_dump($readtxt);
            echo "<h3> file content: </h3>";
            echo $readtxt;
            fclose($file);

    }else{
        echo " <h2> File cannot be opened </h2>";
    }
//
//




########################## Open file for wirting ####################

    $fileWrite=fopen("att.txt","a");
//    var_dump($fileWrite);

    if($fileWrite){

        #wirte data to a the file
        $write=fwrite($fileWrite,"this is simple string ya eman");
        var_dump($write);
        fclose($fileWrite);


    }else{
        echo " <h5> no such file </h5>";
    }



    $fileappend=fopen("att.txt","a");
////    var_dump($fileWrite);
//
    if($fileappend){
        $value="bbooooo";
        #wirte data to a the file
        $append=fwrite($fileappend,$value);
        $append=fwrite($fileappend,$value);
        $append=fwrite($fileappend,$value);
        $append=fwrite($fileappend,"uuuuuuuuuuuuuuu".PHP_EOL);
        $append=fwrite($fileappend,"fyyyyyy\r\n");

//        var_dump($append);

        fclose($fileappend);

    }else{
        echo " <h5> no such file </h5>";
    }
























