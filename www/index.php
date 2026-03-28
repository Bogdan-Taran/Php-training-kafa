<?php
var_dump(!1);
echo '<br>';
var_dump(!0);
echo '<br>';
var_dump(!true);
echo '<br>';
var_dump(2 && 3);
echo '<br>';
var_dump(5 && 0);
echo '<br>';
var_dump(3 || 0);
echo '<br>';
var_dump(5 / 1);
echo '<br>';
var_dump(1 / 5);
echo '<br>';
var_dump(5 + '5string');
echo '<br>';
var_dump('5' == 5);
echo '<br>';
var_dump('05' == 5);
echo '<br>';
var_dump('05' == '5');
echo '<br>';


echo 'Условия в php<br>';
if ('string') {echo 'Условие выполнилось';}
echo '<br>';
if (0) {echo 'Условие выполнилось';}
echo '<br>';
if (null) {echo 'Условие выполнилось';}
echo '<br>';
if (5) {echo 'Условие выполнилось';}
echo '<br>';
if (-5) {echo '-5 Условие выполнилось';}
echo '<br>';
//суть в том, что в условии проверяется что-то и это что-то "не пусто" или не является нулём (ключевое слово), то возвращает true
$chet = 5%2 == 0 ? 'Число чётное': 'Числов нечётное';
echo $chet;
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

