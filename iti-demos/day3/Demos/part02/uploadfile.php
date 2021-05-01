<?php


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo "<h1> Uploading file";

    # Info about file
    # $_FILES

//    var_dump($_POST);

//    var_dump($_FILES);

    if(isset($_FILES["testfile"])) {

        $uploadfile = $_FILES["testfile"];

        if($uploadfile["name"]!=""){

            $filename= $uploadfile["name"];
            $filetmpname=$uploadfile["tmp_name"];
            $filesize=$uploadfile["size"];
            $ext=explode(".",$filename);
            $ext= end($ext);

            $extensions=["png","jpg"];
            $errors=[];

            if(!in_array($ext,$extensions)){
                $errors[]="this type is not allowed";
            }

            if($filesize> 1000000000){
                $errors[]="this is file is to long, please choose another one";
            }

            if(empty($errors)){
                #upload file
//               #move_uploaded_file(Tempname, destpath)
                echo "dddd";
                move_uploaded_file($filetmpname, "files/".$filename);

            }else{
                print_r($errors);
            }




        }





    }else{
        echo " <br> No file choosen";
    }










