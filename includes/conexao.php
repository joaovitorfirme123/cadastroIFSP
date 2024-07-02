<?php

        $hostname = 'localhost';
        $username = 'root';
        $hpassword = '';
        $database= 'IFSP';
        $port = 3307;

        $con = mysqli_connect($hostname,$username,$hpassword,$database,$port);

        if(mysqli_connect_errno()){
            printf("erro de conexão: %s", mysqli_connect_errno());
            exit;
        }






?>