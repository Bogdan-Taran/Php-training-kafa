<?php
if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;
    $sizeFile = $file['size'];
    $filePath = $file['tmp_name'];
    $newFilePath = __DIR__ . '/upload/' . $srcFileName;
    $image = getimagesize($filePath);
    $limitWidth = 1280;
    $limitHeight = 720;

    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    if ($sizeFile > 8000000) {
        $error = 'размер файла слишком большой';
    }
    elseif ($file['error'] == UPLOAD_ERR_INI_SIZE) {
        $error = 'размер файла слишком большой';
    }
    else if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла.';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'http://myproject.loc/uploads/' . $srcFileName;
    }
}
?>

<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if (!empty($error)): ?>
    <?= $error ?>
<?php elseif (!empty($result)): ?>
    <?= $result ?>
<?php endif; ?>
<br>
<form action="/www/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>