<?php
include "file1.php";
$index = "Este é o Index";
$array_includes = [$file1, $file2, $index];

echo "<pre>";
print_r($array_includes);
echo "</pre>";