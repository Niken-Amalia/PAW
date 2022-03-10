<?php
function pengurangan ($num1, $num2)
{
    $x = $num1;
    $y = $num2;
    $hasil = $x - $y;
    return $hasil;
}
$hasil1 = pengurangan(8,1);
$hasil2 = pengurangan(12,6);
$hasil3 = pengurangan(4,1);
echo " Hasil Pengurangan 1 = $hasil1 </br>";
echo " Hasil Pengurangan 2 = $hasil2 </br>";
echo " Hasil Pengurangan 3 = $hasil3 </br>";
?>