<?php 

$warna_lampu = ['merah', 'kuning', 'hijau'];
$status = 0;

function lalu_lintas() {
     global $warna_lampu, $status;

     $warna = $warna_lampu[$status];

     $status = ($status + 1) %  count($warna_lampu);
     return $warna;
}

echo lalu_lintas() . "\n"; # merah
echo lalu_lintas() . "\n"; # kuning
echo lalu_lintas() . "\n\n"; # hijau

echo lalu_lintas() . "\n";
echo lalu_lintas() . "\n";
echo lalu_lintas() . "\n";

?>