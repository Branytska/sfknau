<?php
	include "../incdb/connect_to_db.php";

    $date = $_POST['date'];
    $group = $_POST['group'];
    $lesson = $_POST['lesson'];
    $subject = $_POST['subject'];
    $activity = $_POST['activity'];
    $teacher = $_POST['teacher'];
    $several = $_POST['several'];
	$query = "INSERT INTO main_activities(activity_id, teacher_id, subject_id, group_id, lesson_number, numbers_of_hours, several_groups, date_activity)
VALUES (".$activity.", ".$teacher.", ".$subject.", ".$group.", ".$lesson.", 2, ".$several.", '".$date."')";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	$query = "SELECT * FROM main_activities WHERE date_activity = '".$date."';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if (mysqli_num_rows($result) == 0) {
    	echo "error";
	} else {
    	echo json_encode($result->fetch_row());
	}
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);