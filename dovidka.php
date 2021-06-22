<? 
include "incdb/connect_to_db.php"; 
include "register/check.php"
?>
<!DOCTYPE html>
<html>
<head>
<title>СФКНАУ - Довідка</title>
<? include'page/head.php'?>
</head>

<body>
	<? include'page/nav.php'?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="raports.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></use></svg>Рапортички</a></li>
			<li><a href="tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Таблиця проведенних заходів</a></li>
			<li><a href="zvity.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Звіти</a></li>
			<li class="active"><a href="dovidka.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>Довідка</a></li>

			<li role="presentation" class="divider"></li>

			<li class="dop-menu"><a href="dovidka/group_type.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Види груп</a></li>
			<li class="dop-menu"><a href="dovidka/types_of_activities.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Види основних заходів</a></li>
			<li class="dop-menu"><a href="dovidka/study_groups.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Групи</a></li>
			<li class="dop-menu"><a href="dovidka/subjects.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Дисципліни</a></li>
			<li class="dop-menu"><a href="dovidka/teachers.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Викладачі</a></li>
		</ul>
		<div class="panel panel-blue">
			<div class="panel-body">
				<div id="calendar"></div>
			</div>
		</div>
	</div>
	<? include"page/script.php"?>	
</body>

</html>
