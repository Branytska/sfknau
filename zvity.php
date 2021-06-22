<? include "incdb/connect_to_db.php"; include "register/check.php"?>
<!DOCTYPE html>
<html>
<head>
<title>СФКНАУ - Звіти</title>
<? include'page/head.php'?>
</head>

<body>
	<? include'page/nav.php'?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="raports.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></use></svg>Рапортички</a></li>
			<li><a href="tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Таблиця проведенних заходів</a></li>
			<li class="active"><a href="zvity.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Звіти</a></li>
			<li><a href="dovidka.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>Довідка</a></li>

			<li role="presentation" class="divider"></li>

			<li class="dop-menu"><a href="zvity/teacher.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg>Звіт по викладачу</a></li>
			<li class="dop-menu"><a href="zvity/group.php"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg>Звіт по групі</a></li>
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
