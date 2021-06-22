<?php
	include "../incdb/connect_to_db.php";

    $type_name = $_POST['type_name'];
	$query = "INSERT INTO group_type (type_name) VALUES ('".$type_name."') ;";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	$query = "SELECT id FROM group_type WHERE type_name = '".$type_name."';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if (mysqli_num_rows($result) == 0) {
    	echo "erorr";
	} else {
    	echo json_encode($result->fetch_row());
	}
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);