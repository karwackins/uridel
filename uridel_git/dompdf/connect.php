<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$connection = @mysql_connect('localhost', 'root', '')
        or die('Brak polaczania z serwerem Mysql');
$db = @mysql_select_db('urlopy', $connection)
        or die ('Nie mozna polaczyc sie z baza danych');
?>
</body>
</html>
