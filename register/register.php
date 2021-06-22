<?php 
		include "incdb/connect_to_db.php";
		
		if(isset($_POST['submit']))
		{
    		$err = "";
    		// проверям логин
    		if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    		{
        		$err = "Логин может состоять только из букв английского алфавита и цифр";
    		}

    		if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    		{
        		$err = "Логин должен быть не меньше 3-х символов и не больше 30";
    		}
    		$query = mysqli_query($link, "SELECT id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    		if(mysqli_num_rows($query) > 0)
    		{
        		$err = "Пользователь с таким логином уже существует в базе данных";
    		}
    		// Если нет ошибок, то добавляем в БД нового пользователя
    		if($err == "")
    		{

        		$login = $_POST['login'];

        		// Убераем лишние пробелы и делаем двойное хеширование
        		$password = md5(md5(trim($_POST['password'])));

        		mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        		header("Location: ../index.php"); 
                exit();
    		}
    		else
    		{
                echo '<div class="alert bg-danger col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> '.$err.' <a href="register.php" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
                
    		}
		}
	?>