// Cau 4
<?php
echo "Nhập vào hệ số a: ";
$a = fgets(STDIN);
echo "Nhập vào hệ số b: ";
$b = fgets(STDIN);

if ($a == 0) {
    if ($b == 0) {
        echo "Phương trình vô số nghiệm\n";
    } else {
        echo "Phương trình vô nghiệm\n";
    }
} else {
    $x = -$b / $a;
    echo "Nghiệm của phương trình là: " . $x . "\n";
}
?>
