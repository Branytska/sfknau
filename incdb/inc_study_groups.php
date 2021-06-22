<?php
	include "connect_to_db.php";
	$query = "SELECT study_groups.id, study_groups.group_type_id, study_groups.group_name FROM study_groups";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	 if($result){
	 	$rows = mysqli_num_rows($result);
        $column = mysqli_num_fields($result);
        while ($row = mysqli_fetch_array($result)) {
        	echo "<tr>";
            echo "<td class='bs-checkbox'><input name='del' type='checkbox' value='".$row['id']."'></td>";
        	echo "<td>".$row['id']."</td>";
            if ($row['group_type_id'] == null) {
                echo "<td>Інформація відстуня</td>";    
            }else{
                $query2 = "SELECT group_type.type_name FROM group_type WHERE group_type.id = ".$row['group_type_id'];
                $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
                if ($result2) {
                    $row2 = mysqli_fetch_array($result2);
                    echo "<td>".$row2['type_name']."</td>"; 
                }
                
            }
            echo "<td>".$row['group_name']."</td>";
        	echo "</tr>";
        }
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);