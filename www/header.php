<html>
<head>
    <title>Заголовок страницы</title>
    <style>
        table, td {
            border: solid black 1px;
            border-collapse: collapse;
        }

        #layout {
            width: 800px;
            margin: auto;
        }

        #layout td {
            padding: 20px;
        }

        #sidebar {
            width: 300px
        }
    </style>
</head>
<body>
<table id="layout">
    <tr>
        <td><?= $header ?></td>
        <td><?= $header_logo ?></td>
        <td><?= $header_text ?></td>
        <td><?= $header_text2 ?></td>
    </tr>
    <tr>