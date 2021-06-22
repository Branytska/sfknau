<? 
include "incdb/connect_to_db.php"; 
include "register/check.php"
?>
<!DOCTYPE html>
<html>
<head>

<title>СФКНАУ - Рапотичка - День</title>

<? include "page/head.php"?>
</head>

<body>
	<?include "page/nav.php"?>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="raports.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></use></svg>Рапортички</a></li>
			<li><a href="tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Таблиця проведенних заходів</a></li>
			<li><a href="zvity.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Звіти</a></li>
			<li><a href="dovidka.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>Довідка</a></li>
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
					<div class="panel-heading">Додати рапортичку за день  <lable style="float: right;"><? date_default_timezone_set('UTC+3'); echo "Сьогодні: ".date('d-m-Y');?></lable></div>
					<div class="panel-body">
						<div>
							<div id="result"></div>
							<div style="width: 300px; margin-bottom: 5px; float: left;">Оберіть дату
								<input type="date" class="form-control" name="calendar" value="16.05.2020">
							</div>
							<div style="width: 300px; margin-bottom: 5px; float: left;">Оберіть групу
								<select class='form-control' id='group'>
									<option value='null'>Оберіть групу...</option>
									<?php include"raport_db/group.php"?>
								</select>
							</div>
							<div style="float: right; margin-top: 10px;">
								<button style="width: 200px;" id="add_raport_day" type="submit" class="btn btn-primary">Додати
								</button>
							</div>
						</div>
						<table data-toggle="table">
						    <thead>
						    	<tr>
						    		<th>№ пари</th>
						        	<th>Дисципліна</th>
						        	<th>Вид заходу</th>
						        	<th>Викладач</th>
						        	<th>Поток</th>
						    	</tr>
						    </thead>
						    	<tr name="0">
						    		<td><label>0</label></td>
						    		<td><select class="js-selectize form-control" id='subject0'>
										<option value="null">Оберіть дисципліну...</option>
						    			<?php include"raport_db/subject.php"?>
									</select></td>
						    		<td><select class='js-selectize form-control' id='activity0'>
						    			<option value='null'>Оберіть заход...</option>
						    			<?php include"raport_db/activity.php"?>
						    		</select></td>
						    		<td><select class='js-selectize form-control' id='teacher0'>
						    			<option value='null'>Оберіть викладача...</option>
						    			<?php include"raport_db/teacher.php"?>
						    		</select></td>
						    		<td><input type='checkbox' name='several0'></td>
						    	</tr>
						    	<tr name="1">
						    		<td><label>1</label></td>
						    		<td><select class='form-control' id='subject1'>
						    			<option value='null'>Оберіть дисципліну...</option>
						    			<?php include"raport_db/subject.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='activity1'>
						    			<option value='null'>Оберіть заход...</option>
						    			<?php include"raport_db/activity.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='teacher1'>
						    			<option value='null'>Оберіть викладача...</option>
						    			<?php include"raport_db/teacher.php"?>
						    		</select></td>
						    		<td><input type='checkbox' id='several1'></td>
						    	</tr>
						    	<tr name="2">
						    		<td><label>2</label></td>
						    		<td><select class='form-control' id='subject2'>
						    			<option value='null'>Оберіть дисципліну...</option>
						    			<?php include"raport_db/subject.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='activity2'>
						    			<option value='null'>Оберіть заход...</option>
						    			<?php include"raport_db/activity.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='teacher2'>
						    			<option value='null'>Оберіть викладача...</option>
						    			<?php include"raport_db/teacher.php"?>
						    		</select></td>
						    		<td><input type='checkbox' id='several2'></td>
						    	</tr>
						    	<tr name="3">
						    		<td><label>3</label></td>
						    		<td><select class='form-control' id='subject3'>
						    			<option value='null'>Оберіть дисципліну...</option>
						    			<?php include"raport_db/subject.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='activity3'>
						    			<option value='null'>Оберіть заход...</option>
						    			<?php include"raport_db/activity.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='teacher3'>
						    			<option value='null'>Оберіть викладача...</option>
						    			<?php include"raport_db/teacher.php"?>
						    		</select></td>
						    		<td><input type='checkbox' id='several3'></td>
						    	</tr>
						    	<tr name="4">
						    		<td><label>4</label></td>
						    		<td><select class='form-control' id='subject4'>
						    			<option value='null'>Оберіть дисципліну...</option>
						    			<?php include"raport_db/subject.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='activity4'>
						    			<option value='null'>Оберіть заход...</option>
						    			<?php include"raport_db/activity.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='teacher4'>
						    			<option value='null'>Оберіть викладача...</option>
						    			<?php include"raport_db/teacher.php"?>
						    		</select></td>
						    		<td><input type='checkbox' id='several4'></td>
						    	</tr>
						    	<tr name="5">
						    		<td><label>5</label></td>
						    		<td><select class='form-control' id='subject5'>
						    			<option value='null'>Оберіть дисципліну...</option>
						    			<?php include"raport_db/subject.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='activity5'>
						    			<option value='null'>Оберіть заход...</option>
						    			<?php include"raport_db/activity.php"?>
						    		</select></td>
						    		<td><select class='form-control' id='teacher5'>
						    			<option value='null'>Оберіть викладача...</option>
						    			<?php include"raport_db/teacher.php"?>
						    		</select></td>
						    		<td><input type='checkbox' id='several5'></td>
						    	</tr>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

<?include "page/script.php"?>

</body>

</html>
