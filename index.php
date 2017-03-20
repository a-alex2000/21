<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Таблица из json файла в html</title>
</head>
<body>
<h1>Телефонный справочник</h1>
<table>
<thead bgcolor = #0c9ba6>
<tr>
    <td><b>Имя</b></td><td><b>Фамилия</b></td>
    <td><b>Адресс</b></td><td><b>Номер телефона</b></td>
</tr>
</thead>
<?php
###############################################################################
# 2.1                                                                         #
# необходимо вывести таблицу из json файла в html                             #
#PSR-2                                                                        #
###############################################################################
$filename = "telbook.json";
$text_json = file_get_contents( $filename );
$json_array = json_decode( $text_json, true); // получаем массив

$colorFlag = "true";
foreach ($json_array as $key => $value) {
    if ( $colorFlag == true ) $color = "white";else $color = "#e3e3b6";
    echo "<tr bgcolor = \"".$color."\">";
    echo "<td>".$value['firstname']."</td><td>".$value['lastname']."</td>";
    echo "<td>".$value['address']."</td><td>".$value['phoneNumber']."</td>";
    echo "</tr>";
    $colorFlag = !$colorFlag;
}
?>

</table>
<br>
<div>
Copyright.Андрей Мурашов.
</div>
</body>
</html>