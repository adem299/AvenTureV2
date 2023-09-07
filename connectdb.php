<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';   
    $mydb = 'book_db';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $mydb);

    if(! $conn){
        die('Could not connect: '. mysqli_error());
    }




?>