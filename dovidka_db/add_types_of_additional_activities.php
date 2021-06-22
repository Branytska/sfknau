<?php
	include "../incdb/connect_to_db.php";

    $additional_name = $_POST['additional_name'];
    $coefficient = $_POST['coefficient'];
	$query = "INSERT INTO types_of_additional_activities (activity_name, coefficient) VALUES ('".$additional_name."', ".$coefficient.") ;";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	$query = "SELECT activity_name FROM types_of_additional_activities WHERE activity_name = '".$additional_name."';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if (mysqli_num_rows($result) == 0) {
    	echo "erorr";
	} else {
    	echo json_encode($result->fetch_row());
	}
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);