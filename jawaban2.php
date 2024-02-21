<?php

class Nilai {
     public $mapel;
     public $nilai;

     public function __construct($mapel, $nilai) {
          $this->mapel = $mapel;
          $this->nilai = $nilai;
     }
}

class Siswa {
     public $nrp;
     public $nama;
     public $daftarNilai;

     public function __construct($nrp, $nama) {
          $this->nrp = $nrp;
          $this->nama = $nama;
          $this->daftarNilai = array();
     }

     public function tambahNilai($mapel, $nilai) {
          $this->daftarNilai[] = new Nilai($mapel, $nilai);
     }
}

function generate_random($length = 10){
     $character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $randomString = '';
     for ($i = 0; $i < $length; $i++) {
          $randomString .= $character[rand(0, strlen($character) - 1)];
     }
     return $randomString;
}

$siswa = array();
for ($i = 0; $i < 10; $i++) {
     $namaSiswa = generate_random(10);
     $mapel = array("Inggris", "Indonesia", "Jepang");
     $mapelRandom = $mapel[array_rand($mapel)];
     $nilaiRandom = rand(0, 100);
     $siswa[] = new Siswa("NRP$i", $namaSiswa);
     $siswa[$i]->tambahNilai($mapelRandom, $nilaiRandom);
}

foreach ($siswa as $key => $student) {
     echo "Siswa " . ($key + 1) . "NRP - " . $student->nrp . "Nama - " . $student->nama . "\n";
     foreach ($student->daftarNilai as $nilai) {
          echo "Mapel: " . $nilai->mapel . "Nilai: " .$nilai->nilai . "\n";
     }
     echo "\n";
}

?>