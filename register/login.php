<?php
	function generateCode($length=6) {
    	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    	$code = "";
    	$clen = strlen($chars) - 1;
    	while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    	}
    	return $code;
	}

    	include "incdb/connect_to_db.php";

    	if(isset($_POST['submit']))
		{
    		$query = mysqli_query($link,"SELECT id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    		$data = mysqli_fetch_assoc($query);

    		if($data['user_password'] === md5(md5($_POST['password'])))
    		{
        		$hash = md5(generateCode(10));
        		mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE id='".$data['id']."'");

        		setcookie("id", $data['id'], time()+60*60*24*30, "/");
        		setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); 
        		header("Location: raports.php"); exit();
    		}
    		else
    		{
        		echo '<div class="alert bg-danger col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Неправильний логін чи пароль <a href="index.php" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>'; 
    		}
	}
?>