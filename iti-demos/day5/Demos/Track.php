<?php

    #include, include_once, require, require_once
    require_once("itistd.php");
    require_once ("std.php");

    use \iticlass1\ITIStudent as ITIStudent1;
    use \iticlassname\ITIStudent  as ITIStudent2;
    use \iticlassname\printClassname;

    $s= new ITIStudent1();
    var_dump($s);

    $s2= new ITIStudent2();
    var_dump($s2);

    iticlassname\printClassname();

    #######################################################



    #namespace --
