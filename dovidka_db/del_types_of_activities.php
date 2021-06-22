<?php
    include "../incdb/connect_to_db.php";
    $id = $_POST['id'];
    $query = "DELETE FROM types_of_activities WHERE id = " .$id. ";";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $query = "SELECT * FROM types_of_activities";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if (mysqli_num_rows($result) == 0) {
        echo "erorr";
    } else {
        echo json_encode($result->fetch_row());
    }
    mysqli_free_result($result);// очищаем результат
    mysqli_close($link);