<?php
	$link = mysql_connect('localhost', 'root', '12345678');
	if (!$link) {
		die('Неизвестная ошибка, проверьте подключение к серверу! ' . mysql_error());
	}
	$db_selected = mysql_select_db('school-tasks', $link);
	if (!$db_selected) {
		die ('Неизвестная ошибка, проверьте подключение к базе данных! ' . mysql_error());
	}
?>