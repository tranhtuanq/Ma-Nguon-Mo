
// Cau 8
<?php
echo "Nhập vào số nguyên dương N: ";
$N = fgets(STDIN);

echo "$N ";
while ($N != 1 && $N > 0) {
    if ($N % 2 == 0) {
        $N /= 2;
    } else {
        $N = $N * 3 + 1;
    }
    echo "$N ";
}
?>