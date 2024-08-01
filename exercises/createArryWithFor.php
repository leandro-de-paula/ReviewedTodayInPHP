<?php

$new_array = [];
$limite = 10;
for ($i=1; $i <= $limite; $i++) { 
    array_push($new_array,$i);
}
print_r($new_array);

$new_array_v2 = [];
for ($i=10; $i <= 20; $i++) { 
    array_push($new_array_v2,$i);
}

$i = 0;
while ($i <= 10) {
    if ($new_array_v2[$i] % 2 <> 0) {
        echo $new_array_v2[$i] . " É impar \n";
    }
    $i++;
}