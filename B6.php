// Cau 6
<?php
echo "Nhập vào số nguyên dương N có 2 chữ số: ";
$N = fgets(STDIN);
$unit = $N % 10;
$tens = floor($N / 10);
$sum = $unit + $tens;
echo "Tổng các chữ số của $N là: " . $sum . "\n";
?>