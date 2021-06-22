<? 
include "../incdb/connect_to_db.php"; 
include "../register/check.php"
?>
<!DOCTYPE html>
<html>
<head>
<title>СФКНАУ - Звіт - Група</title>
<? include'../page/head.php'?>
</head>

<body>
	<? include'../page/nav.php'?>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="../raports.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></use></svg>Рапортички</a></li>
			<li><a href="../tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Таблиця проведенних заходів</a></li>
			<li class="active"><a href="../zvity.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Звіти</a></li>
			<li><a href="../dovidka.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>Довідка</a></li>

			<li role="presentation" class="divider"></li>

			<li class="dop-menu"><a href="teacher.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg>Звіт по викладачу</a></li>
			<li class="dop-menu, active"><a href="group.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg>Звіт по групі</a></li>
		</ul>
		<div class="panel panel-blue">
			<div class="panel-body">
				<div id="calendar"></div>
			</div>
		</div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div>
							<form action="../zvity_db/group_zvit.php" target="_blank" method="post" onsubmit="valid_day(this); return false;">
								<div id="result"></div>
								<div style="width: 300px; margin-bottom: 5px; float: left;">
									<label>Оберіть групу</label> 
									<select class='form-control' name='group'>
										<option value='null'>Група...</option>
										<?php include"../raport_db/group.php"?>
									</select>
								</div>
								<div style="margin-top: 10px; float: right;">
									<button style="width: 200px;" id="result_raport_day" type="submit" class="btn btn-primary">Вивести</button>
								</div>
								<div style="width: 300px; margin-bottom: 5px; ">
									<label>Оберіть початкову дату</label> 
									<input type="date" class="form-control" name="from_date">
									<label>Оберіть кінцеву дату</label> 
									<input type="date" class="form-control" name="to_date">
								</div>
							</form>
																
						</div>
						<div>
					</div>
					</div>
					
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

	<? include"../page/script.php"?>	
</body>

</html>
