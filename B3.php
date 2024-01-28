// Cau 3
<?php
echo "Nhập vào nhiệt độ Fahrenheit: ";
$fahrenheit = fgets(STDIN);
$celsius = 5 / 9 * ($fahrenheit - 32);
echo "Nhiệt độ tương đương trong Celsius là: " . $celsius . "\n";
?>