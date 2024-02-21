<?php 

function karakter_banyak($kata) {
     $hitung = array();

     for ($i = 0; $i < strlen(($kata)); $i++) {
          $karakter = $kata[$i];
          if (isset($hitung[$karakter])) {
               $hitung[$karakter]++;
          } else {
               $hitung[$karakter] = 1;
          }
     }

     $maksimum = max($hitung);
     $paling_banyak = array_search($maksimum, $hitung);
     $hasil = "$paling_banyak $maksimum" . "x";

     return $hasil;
}

echo "Masukan Kata : ";
$kata = trim(fgets(STDIN));
echo karakter_banyak($kata) . "\n";

?>