<?php
//1.
    echo"1. <br>";
    echo "Họ tên: Trần Anh Tuấn <br>";
    echo "Ngày sinh: 26-01-2007 <br>";
    echo "Mã sinh viên: 2125110088 <br>";
//2.
    echo "2. <br>";
    $ten = "Trần Anh Tuấn";
    $ngsinh = "26-01-2007";
    $massv = "2125110088";
    $sodt = "034xxxxxxx";
    
    echo "Tên: $ten <br>";
    echo "Ngày sinh: $ngsinh <br>"; 
    echo "Mã sinh viên: $massv <br>";
    echo "Số điện thoại: $sodt <br>";
//3.
    const HOST ="HOST";
    const DATABASE ="DATABASE";
    const USERNAME="USERNAME";
    const PASSWORD="PASSWORD";
//4
    echo"ví dụ: <br>";
    // 1. Nội suy biến
    echo "Xin chào $ten";        // Xin chào An
    echo 'Xin chào $ten';        // Xin chào $ten  (không thay biến)

    echo "\n";

    // 2. Ký tự đặc biệt (escape sequence)
    echo "Dòng 1\nDòng 2";       // xuống dòng thật sự
    echo 'Dòng 1\nDòng 2';       // in ra nguyên văn: Dòng 1\nDòng 2
//5
    /* Chú thích nhiều dòng cũng có thể
   viết gọn trên vài dòng như thế này */
?>