<?php
date_default_timezone_set ('Europe/Moscow'); //Часовой пояс
define("DB_HOST","localhost"); // хост базы данных
define("DB_USER","host"); // пользователь базы данных
define("DB_PASS","host"); // пароль от базы данных
define("DB_BASE","fake"); // имя базы данных
@mysql_connect(DB_HOST,DB_USER,DB_PASS)
or die("Невозможно подключиться к базе данных.");
@mysql_select_db(DB_BASE)
or die("Ошибка mysql_select_db()");
?>