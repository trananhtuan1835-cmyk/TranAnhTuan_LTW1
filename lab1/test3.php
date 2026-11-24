<?php

// Bài 1
$chuoi1 = "   Xin chào PHP   ";
$ketQua1 = trim($chuoi1);
echo "Bài 1: [" . $ketQua1 . "]<br>";

// Bài 2
$chuoi2 = "   Học lập trình PHP   ";
$trai = ltrim($chuoi2);
echo "Bài 2 - ltrim: [" . $trai . "]<br>";
$phai = rtrim($chuoi2);
echo "Bài 2 - rtrim: [" . $phai . "]<br>";

// Bài 3
$chuoi3 = "Lap trinh PHP la mot ky nang rat huu ich";
$muoiKyTu = substr($chuoi3, 0, 10);
echo "Bài 3 - 10 ký tự đầu: " . $muoiKyTu . "<br>";
$tuKyTuThu5 = substr($chuoi3, 4);
echo "Bài 3 - Từ ký tự thứ 5 đến hết: " . $tuKyTuThu5 . "<br>";

// Bài 4
$chuoi4 = "Toi dang hoc PHP o truong dai hoc moi ngay";
$chuoiMoi = str_replace("PHP", "JavaScript", $chuoi4);
echo "Bài 4 - Trước: " . $chuoi4 . "<br>";
echo "Bài 4 - Sau: " . $chuoiMoi . "<br>";

?>