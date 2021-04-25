<?php
include "common.php";
printFormData();
function printFormData(){
    echo "welcome   ".$_GET["name"];
    newLine();
    if($_GET["score"]<10){
        echo "your score is : good\n".$_GET["score"];
    }
    elseif($_GET["score"]>10&&$_GET["score"]<30){
        echo "your score is :very good\n".$_GET["score"];
    }else {
        echo "your score is : excellent\n".$_GET["score"];        
    }
    
}

?>