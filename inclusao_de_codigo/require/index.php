<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>
<body>
    <header>
        <h1>Welcome to the tests of require</h1>
    </header>
<?php
require "file_1.php";
require "file_3.php";
echo $text_file_1;
echo "<br>";
echo $text_file_2;
echo "<br>";
echo $text_file_3;
// echo $text_file_3;
?>
</body>
</html>
