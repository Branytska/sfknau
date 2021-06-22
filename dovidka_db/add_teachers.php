<?php
	include "../incdb/connect_to_db.php";

    $teacher_name = $_POST['teacher_name'];
	$query = "INSERT INTO teachers (teacher_name) VALUES ('".$teacher_name."');";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	$query = "SELECT teacher_name FROM teachers WHERE teacher_name = '".$teacher_name."';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        echo json_encode($result->fetch_row());
    }else{
        echo json_encode("error");
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);