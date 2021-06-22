<? include "incdb/connect_to_db.php"; include "register/check.php"?>
<!DOCTYPE html>
<html>
<head>

<title>СФКНАУ - Таблиці - Осн. заходи</title>

<? include'page/head.php'?>

</head>

<body>
	<? include'page/nav.php'?>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="../raports.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></use></svg>Рапортички</a></li>
			<li class="active"><a href="../tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Таблиця проведенних заходів</a></li>
			<li><a href="../zvity.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Звіти</a></li>
			<li><a href="../dovidka.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>Довідка</a></li>
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
					<div class="panel-heading">Основні заходи <lable style="float: right;"><? date_default_timezone_set('UTC+3'); echo "Сьогодні: ".date('d-m-Y');?></lable></div>
					<div class="panel-body">
						<table data-toggle="table" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    	<tr>
						        	<th data-sortable="true">ID</th>
						        	<th data-sortable="true">Вид заходу</th>
						        	<th data-sortable="true">П.І.Б. викладача</th>
						        	<th data-sortable="true">Дисципліна</th>
						        	<th data-sortable="true">Номер групи</th>
						        	<th data-sortable="true">Номер пари</th>
						        	<th data-sortable="true">Дата проведення</th>
						        	<th data-sortable="true">Години</th>
						        	<th data-sortable="true">Поток</th>
						    	</tr>
						    </thead>
						    <?php include 'incdb/inc_main_activities.php' ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

	<? include"page/script.php"?>		
</body>

</html>
