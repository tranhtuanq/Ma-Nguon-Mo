// Cau 7
<?php
echo "Nhập vào thời gian tính bằng giây: ";
$seconds = fgets(STDIN);
$hours = floor($seconds / 3600);
$minutes = floor(($seconds % 3600) / 60);
$remaining_seconds = $seconds % 60;

echo "Thời gian là: $hours giờ, $minutes phút, $remaining_seconds giây\n";
?>