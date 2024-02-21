<?php 

function dua_besar($arr) {
     if (count($arr) != 5) {
          return "Array harus berisi 5 elemen";
      }
      arsort($arr);
      $values = array_values($arr);
      return $values[1];
}

$random_array = [];
for ($i = 0; $i < 5; $i++) {
     $random_array[] = rand(1, 100);
}

echo "Array " . implode(", ", $random_array) . "\n";

echo "Nilai Terbesar kedua adalah : " . dua_besar($random_array);

?>