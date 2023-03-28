<?php

if(isset($_POST['operasi'])) {
  $angka1 = $_POST['angka1'];
  $angka2 = $_POST['angka2'];
  $operator = $_POST['operator'];
}

// mengecek operator aritmatika yang digunakan menggunakan if else
if($operator == +){ // jika operator aritmatika adalah +
  $hasil = $angka1 + $angka2; // lakukan operasi penjumlahan
  echo "Hasil penjumlahan dari $angka1 + $angka2 = $hasil"; // tampilkan hasil
} elseif($operator == -){ // jika operator aritmatika adalah -
  $hasil = $angka1 - $angka2; // lakukan operasi pengurangan
  echo "Hasil penjumlahan dari $angka1 - $angka2 = $hasil"; // tampilkan hasil
} elseif($operator == *){ // jika operator aritmatika adalah *
  $hasil = $angka1 * $angka2; // lakukan operasi perkalian
  echo "Hasil penjumlahan dari $angka1 * $angka2 = $hasil"; // tampilkan hasil
} elseif($operator == /){ // jika operator aritmatika adalah /
  $hasil = $angka1 / $angka2; // lakukan operasi pembagian
  echo "Hasil penjumlahan dari $angka1 / $angka2 = $hasil"; // tampilkan hasil
} else{ // jika operator aritmatika tidak dikenali
  echo "Operator aritmatika tidak dikenali"; // tampilkan pesan kesalahan
}
?>
