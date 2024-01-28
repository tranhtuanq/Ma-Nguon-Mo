// Cau 5
<?php
echo "Nhập số nguyên a: ";
$a = fgets(STDIN);
echo "Nhập số nguyên b: ";
$b = fgets(STDIN);
echo "Nhập số nguyên c: ";
$c = fgets(STDIN);

$max = max($a, $b, $c);
echo "Số lớn nhất trong ba số là: " . $max . "\n";
?>