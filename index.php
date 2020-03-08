<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<title>Автоматизация процесса приема заказов на фотопечать Пономарев В.Г.</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="javascript.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="header.css">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
<script src="js/jquery.fancybox.min.js"></script>


</head>
<body>
		<form method="post" action="check.php">
	<p class="instr2">
	<script language="javascript" type="text/javascript"><!--
	var d = new Date();

	var day=new Array("Воскресенье","Понедельник","Вторник",
	"Среда","Четверг","Пятница","Суббота");

	var month=new Array("января","февраля","марта","апреля","мая","июня",
	"июля","августа","сентября","октября","ноября","декабря");

	document.write(day[d.getDay()]+" " +d.getDate()+ " " + month[d.getMonth()]
	+ " " + d.getFullYear() + " г.");
	//--></script></p>


<div class="content">

	<div class="row">
		<div class="col-9">

	<!-- Область для перетаскивания -->
	<div id="drop-files" ondragover="return false">
		<p>Прием заказов на фотопечать</p>
		выберите или перетащите фото в поле

        <form id="frm">
        	<input type="file" id="uploadbtn" multiple />
        </form>
	</div>
    <!-- Область предпросмотра -->
	<div id="uploaded-holder">
		<div id="dropped-files">
        	<!-- Кнопки загрузить и удалить, а также количество файлов -->
        	<div id="upload-button">
            	<center>
                	<span>0 Файлов</span>
					<a href="#" class="upload">Создать заказ</a>
				<button class="sub">	<input class="sub" type="submit" value="" name=""/> </button>
					<a href="#" class="delete">Удалить</a>
                    <!-- Прогресс бар загрузки -->
                	<div id="loading">
						<div id="loading-bar">
							<div class="loading-color"></div>
						</div>
						<div id="loading-content"></div>
					</div>
                </center>
			</div>
        </div>
	</div>
	<!-- Список загруженных файлов -->
	<div id="file-name-holder">
		<ul id="uploaded-files">
			<h1>Загруженные файлы</h1>
		</ul>
	</div>

</div>


	<div class="col-3">

	<div class="instr">
  Параметры заказа: <br><br>
	Размер фото

	<select name="nameselect">
		<option>10х15</option>
		<option>15х20</option>
		<option>18х24</option>
		<option>20х30</option>
	</select>

	<br>
	<br>

	Бумага
	<select name="paper">
		<option>матовая</option>
		<option>глянцевая</option>

	</select>
	<br>
	<br>
  Поля

	<select name="border">
		<option>без полей</option>
		<option>с полями</option>

	</select>
	<br>
	<br>
	Имя клиента <input type="text" size="20" name="name">
	<br>
	<br>
	Телефон <input type="text" size="20" name="phone">



</div>
</div>
</div>
</div>

<div id='preview'></div>


<div id="preloader_malc">

	<div>

		Автоматизация процесса приема заказов на фотопечать в полиграфическом центре "Принтсбург"<br>
		Пономарев В.Г. 2020 г.

	</div>

</div>

<style type="text/css">
	#preloader_malc {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: rgba(0, 0, 0, .6);
		z-index: 99
	}

	#preloader_malc div {
		background: #fff;
		width: 260px;
		height: 200px;
		line-height: 40px;
		border-radius: 8px;
		font-family: arial;
		font-size: 15px;
		color: #111;
		text-align: center;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
		position: fixed;
		z-index: 999;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		margin: auto
	}
</style>

<script type="text/javascript">

	window.onload = function() {

		setTimeout(function() {

			document.getElementById("preloader_malc").style.display = "none";

		}, 3000);

	};

</script>

</form>
</body>
</html>
