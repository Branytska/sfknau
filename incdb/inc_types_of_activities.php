<?php
	include "connect_to_db.php";
	$query = "SELECT * FROM types_of_activities";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	 if($result){
	 	$rows = mysqli_num_rows($result);
        $column = mysqli_num_fields($result);
        while ($row = mysqli_fetch_array($result)) {
        	echo "<tr>";
            echo "<td class='bs-checkbox'><input name='del' type='checkbox' value='".$row['id']."'></td>";
        	echo "<td>".$row['id']."</td>";
        	echo "<td>".$row['activity_name']."</td>";
        	echo "</tr>";
        }
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);