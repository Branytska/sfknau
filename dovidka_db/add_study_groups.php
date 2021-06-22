<?php
	include "../incdb/connect_to_db.php";

    $group_name = $_POST['group_name'];
    $group_type = $_POST['group_type'];
	$query = "INSERT INTO study_groups (group_type_id, group_name) VALUES (".$group_type.", '".$group_name."');";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	$query = "SELECT group_name FROM study_groups WHERE group_name = '".$group_name."';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        echo json_encode($result->fetch_row());
    }else{
        echo json_encode("error");
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);