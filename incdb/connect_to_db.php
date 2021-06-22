<?php
	$servername = "127.0.0.1:3306";
    $username = "root";
    $password = "8(Mi7u22vDBuV(^";
    $dbname = "sfknau";

    $link = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка " . mysqli_error($link));
    mysqli_select_db($link,"ajax_demo");
    mysqli_set_charset($link, "utf8");