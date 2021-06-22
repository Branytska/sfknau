<?php
	include "../incdb/connect_to_db.php";

    $subject_name = $_POST['subject_name'];
	$query = "INSERT INTO subjects (subject_name) VALUES ('".$subject_name."');";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	$query = "SELECT subject_name FROM subjects WHERE subject_name = '".$subject_name."';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        echo json_encode($result->fetch_row());
    }else{
        echo json_encode("error");
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);