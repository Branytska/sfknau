<?php
    include "connect_to_db.php";
    $query = "SELECT main_activities.id, main_activities.activity_id, main_activities.teacher_id, main_activities.subject_id, main_activities.group_id, main_activities.lesson_number, main_activities.date_activity, main_activities.numbers_of_hours, main_activities.several_groups FROM main_activities";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
     if($result){
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            if ($row['activity_id'] == null) {
                echo "<td>Інформація відстуня</td>";
            }else{
                $query2 = "SELECT types_of_activities.activity_name FROM types_of_activities WHERE types_of_activities.id = ".$row['activity_id'];
                $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
                if ($result2) {
                    $row2 = mysqli_fetch_array($result2);
                    echo "<td>".$row2['activity_name']."</td>";
                }
                mysqli_free_result($result2);
            }
            if ($row['teacher_id'] == null) {
               echo "<td>Інформація відстуня</td>";
            }else{
                $query2 = "SELECT teachers.teacher_name FROM teachers WHERE teachers.id = ".$row['teacher_id'];
                $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
                if ($result2) {
                    $row2 = mysqli_fetch_array($result2);
                    echo "<td>".$row2['teacher_name']."</td>";
                }
                mysqli_free_result($result2);
            }
            if ($row['subject_id'] == null) {
               echo "<td>Інформація відстуня</td>";
            }else{
                $query2 = "SELECT subjects.subject_name FROM subjects WHERE subjects.id = ".$row['subject_id'];
                $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
                if ($result2) {
                    $row2 = mysqli_fetch_array($result2);
                    echo "<td>".$row2['subject_name']."</td>";
                }
                mysqli_free_result($result2);
            }
            if ($row['group_id'] == null) {
               echo "<td>Інформація відстуня</td>";
            }else{
                $query2 = "SELECT study_groups.group_name FROM study_groups WHERE study_groups.id = ".$row['group_id'];
                $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
                if ($result2) {
                    $row2 = mysqli_fetch_array($result2);
                    echo "<td>".$row2['group_name']."</td>";
                }
                mysqli_free_result($result2);
            }
            echo "<td>".$row['lesson_number']."</td>";
            echo "<td>".$row['date_activity']."</td>";
            echo "<td>".$row['numbers_of_hours']."</td>";
            echo "<td>".$row['several_groups']."</td>";
            echo "</tr>";
        }
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);