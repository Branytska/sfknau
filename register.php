<?php include "register/register.php"; ?>
<!DOCTYPE html>
<html>
<head>

<title>СФКНАУ</title>

<? include'page/head.php'?>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				
				<div class="panel-heading">Додавання нового користувача</div>
				<div class="panel-body">
					<div id="result"></div>
					<form role="form"  method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Login" name="login" type="login" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
								<input type="submit" name="submit" value="Додати" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
	<? include"page/script.php"?>	
	
</body>

</html>
