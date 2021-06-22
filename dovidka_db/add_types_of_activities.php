<?php
	include "../incdb/connect_to_db.php";

    $activitie_name = $_POST['activitie_name'];
	$query = "INSERT INTO types_of_activities (activity_name) VALUES ('".$activitie_name."') ;";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	$query = "SELECT activity_name FROM types_of_activities WHERE activity_name = '".$activitie_name."';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if (mysqli_num_rows($result) == 0) {
    	echo "erorr";
	} else {
    	echo json_encode($result->fetch_row());
	}
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);