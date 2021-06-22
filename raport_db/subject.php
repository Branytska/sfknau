<?php
	include "incdb/connect_to_db.php";

	$query = "SELECT id, subject_name FROM subjects";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	if($result){
    	while ($row = mysqli_fetch_array($result)) {
    		echo "<option value='".$row['id']."'>".$row['subject_name']."</option>";
		}
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);