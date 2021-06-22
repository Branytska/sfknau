<? include "../incdb/connect_to_db.php"; include "../register/check.php"?>
<!DOCTYPE html>
<html>
<head>

<title>СФКНАУ - Довідка - Викладачі</title>

<? include'../page/head.php'?>

</head>

<body>
	<? include'../page/nav.php'?>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="../raports.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></use></svg>Рапортички</a></li>
			<li><a href="../tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Таблиця проведенних заходів</a></li>
			<li><a href="../zvity.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Звіти</a></li>
			<li class="active"><a href="../dovidka.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>Довідка</a></li>

			<li role="presentation" class="divider"></li>

			<li class="dop-menu"><a href="group_type.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Види груп</a></li>
			<li class="dop-menu"><a href="types_of_activities.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Види основних заходів</a></li>
			<li class="dop-menu"><a href="study_groups.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Групи</a></li>
			<li class="dop-menu"><a href="subjects.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Дисципліни</a></li>
			<li class="dop-menu, active"><a href="teachers.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Викладачі</a></li>
		</ul>
		<div class="panel panel-blue" style="position: absolute; bottom: 0; width: 100%;">
			<div class="panel-body">
				<div id="calendar"></div>
			</div>
		</div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Перелік викладачів</div>
					<div class="panel-body">
						<div>
							<p style="cursor: pointer;"><button id="popup" class="btn btn-default" style="margin-right: 5px;" >Додати запис</button><button id="del_teachers" class="btn btn-default" style="margin-right: 5px;">Видалити запис</button></p>
							<div id="result_add"></div>
						</div>
						<div id="parent_popup">
							<form role="form" onSubmit="return false">
								<div id="input_data" class="form-group">
									<label>П.І.Б. викладача</label>
									<input id="teacher_name" name="teacher_name" onfocus="this.value=''" class="form-control" placeholder="Введіть П.І.Б. викладача">	
								</div>
								<button id="add_teachers" type="submit" class="btn btn-primary">Додати</button>
							</form>
						</div>
						<div>
							<table id="data_table" data-toggle="table"  data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    	<tr>
						    		<th></th>
						        	<th data-sortable="true">ID</th>
						        	<th data-sortable="true">П.І.Б. викладача</th>
						    	</tr>
						    </thead>
						    <?php include '../incdb/inc_teachers.php' ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

	<? include"../page/script.php"?>
	
</body>

</html>
