<?php
$header = '<h1>HEADER yeah</h1>';
$header_logo = '<h1>HEADER LOGO</h1>';
$header_text = '<p>This is header</p>';
$header_text2 = '<p>And header uses variables</p>';

$sidebar = 'SIDEBAR yeah';

$content = '<h1>Заголовок статьи</h1><p>Текст какой-то статьи</p>';

$footer = '<h2>FOOTER yeah</h2><p>This is footer</p>';

require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';
?>
