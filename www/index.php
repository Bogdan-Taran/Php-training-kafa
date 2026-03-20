<?php
var_dump(!1);
var_dump(!0);
var_dump(!true);
var_dump(2 && 3);
var_dump(5 && 0);
var_dump(3 || 0);
var_dump(5 / 1);
var_dump(1 / 5);
var_dump(5 + '5string');
var_dump('5' == 5);
var_dump('05' == 5);
var_dump('05' == '5');



?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Встраивание выражение</title>
</head>
<body>
<h1>Пример встраивания php в html</h1>
2 + 2 = <?php echo 2+2?>

</body>
</html>