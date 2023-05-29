<!-- 

bagaimana cara menjalankan kipas angin :
---
flow :
1. siapkan kipas angin dan arahkan ke posisi yang diinginkan
2. hubungkan dengan catu daya / terminal
3. tekan tombol power / 1, 2, 3 sesuai kecepatan yang diinginkan
4. kipas angin berhasil dinyalakan

pseudocode Kipas angin :

STORE kipas_angin
STORE listrik
STORE power

IF listrik = 1 in kipas_angin
  if power = on in kipas_angin
    SET status kipas_angin = menyala
  ElSE
    SET status kipas_angin = standby
ELSE
  SET kipas_angin = mati

================= tugas =====================

Menghitung luas dan keliling lingkaran :
---
flow :
1. tentukan nilai jari jari lingkaran -> r
2. hitung luas lingkaran -> pi . r*r
3. hitung keliling lingkaran -> pi . 2*r
4. tampilkan hasil luas dan keliling lingkaran

pseducode menghitung luas dan keliling lingkaran :

STORE r
STORE pi

# luas

CALCULATE pi * r^
SET luas with calculate result 

# keliling

CALCULATE pi * 2*r
SET keliling with calculate result 

PRINT "luas lingkaran  = " luas
PRINT "keliling lingkaran = " keliling

....

php :

-->

<?php

  // set var
  $r = 20;

  // calculate luas
  $luas = M_PI * $r*$r;

  // calculate keliling
  $keliling = M_PI * 2*$r;

  echo "luas = ".$luas."<br>";
  echo "keliling = ".$keliling."<br>";


?>
