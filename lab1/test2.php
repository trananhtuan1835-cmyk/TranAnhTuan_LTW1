<?php
//1.
echo"<h3>1.</h3>";
    $a= 36;
    $b= 7;
    $cong= $a + $b;
    $tru= $a - $b;
    $nhan= $a * $b;
    $chia= $a / $b;
    $chiadu= $a % $b;
    echo"$cong <br>";
    echo"$tru <br>";
    echo"$nhan <br>";
    echo"$chia <br>";
    echo"$chiadu <br>";
echo"<h3>2.</h3>";
$soNguyen = 10;
$chuoiSo = "10";

echo "soNguyen = 10 (int), chuoiSo = \"10\" (string) <br>";
echo "10 == \"10\" : " . var_export($soNguyen == $chuoiSo, true) . "<br>";

echo "10 === \"10\" : " . var_export($soNguyen === $chuoiSo, true) . "<br>";

echo "10 != \"10\" : " . var_export($soNguyen != $chuoiSo, true) . "<br>";
echo "10 <> \"10\" : " . var_export($soNguyen <> $chuoiSo, true) . "<br>";
echo "10 !== \"10\" : " . var_export($soNguyen !== $chuoiSo, true) . "<br>";
//3
echo "<h3>3.</h3>";
$x = 5;
echo "Giá trị x ban đầu: $x <br>";
echo "Kết quả của biểu thức ++\$x: " . ++$x . "<br>";
echo "Giá trị x sau ++\$x: $x <br>";
$x = 5;
echo "<br>Giá trị x ban đầu: $x <br>";
echo "Kết quả của biểu thức \$x++: " . $x++ . "<br>";
echo "Giá trị x sau \$x++: $x <br>";
//4
echo "<h3>4.</h3>";

$chuoi1 = "Xin chao";
$chuoi2 = "cac ban";

$noi1 = $chuoi1 . " " . $chuoi2;
echo "Dùng toán tử . : $noi1 <br>";
echo "Chuỗi 1 sau khi dùng toán tử . : $chuoi1 <br>";
$chuoi1 .= " " . $chuoi2;
echo "Dùng toán tử .= : $chuoi1 <br>";
//5
echo "<h3>5.</h3>";

$khongDau = "Tran Anh Tuan";
$coDau = "Trần Anh Tuấn";
echo "Chuỗi không dấu: $khongDau <br>";
echo "strlen() = " . strlen($khongDau) . "<br>";

echo "Chuỗi có dấu: $coDau <br>";
echo "strlen() = " . strlen($coDau) . " (số byte) <br>";
echo "mb_strlen() = " . mb_strlen($coDau, "UTF-8") . " (số ký tự) <br>";
?>

