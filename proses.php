<?php
if(isset($_POST['submit'])) {
  $angka1 = $_POST['angka1'];
  $angka2 = $_POST['angka2'];
  $operator = $_POST['operator'];
}

switch ($operator) {
  case '+': // jika operator aritmatika adalah +
    $hasil = $angka1 + $angka2; // lakukan operasi penjumlahan
    echo "Hasil penjumlahan dari $angka1 dan $angka2 adalah $hasil"; // tampilkan hasil
    break; // hentikan switch case
  case '-': // jika operator aritmatika adalah -
    $hasil = $angka1 - $angka2; // lakukan operasi pengurangan
    echo "Hasil pengurangan dari $angka1 dan $angka2 adalah $hasil"; // tampilkan hasil
    break; // hentikan switch case
  case '*': // jika operator aritmatika adalah *
    $hasil = $angka1 * $angka2; // lakukan operasi perkalian
    echo "Hasil perkalian dari $angka1 dan $angka2 adalah $hasil"; // tampilkan hasil
    break; // hentikan switch case
  case '/': // jika operator aritmatika adalah /
    $hasil = $angka1 / $angka2; // lakukan operasi pembagian
    echo "Hasil pembagian dari $angka1 dan $angka2 adalah $hasil"; // tampilkan hasil
    break; // hentikan switch case
  default: // jika operator aritmatika tidak dikenali
    echo "Operator aritmatika tidak dikenali"; // tampilkan pesan kesalahan
    break; // hentikan switch case
}
?>
