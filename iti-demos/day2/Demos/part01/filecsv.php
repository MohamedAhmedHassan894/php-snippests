<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


        #fgetcsv , comma seperated data

        $filename="std.csv";

        $filehandler=fopen($filename,"r");

//        $txt=fgetcsv($filehandler);  # return data in form of array

//        var_dump($txt);

        while(!feof($filehandler)){
            $txt=fgetcsv($filehandler,5);
                var_dump($txt);
        }














