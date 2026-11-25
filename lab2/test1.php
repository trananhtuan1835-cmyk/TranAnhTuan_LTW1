<?php
    $menus=["Trang chủ","Tin tức","Liên hệ","Giới thiệu"];
    $subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"]; 
    $sinhvien = [
            ["id" => "SV001", "ten" => "Nguyễn Văn An", "gioitinh" => "Nam", "lop" => "CNTT1"],
            ["id" => "SV002", "ten" => "Trần Thị Bình", "gioitinh" => "Nữ", "lop" => "CNTT2"],
            ["id" => "SV003", "ten" => "Lê Văn Cường", "gioitinh" => "Nam", "lop" => "CNTT1"],
            ["id" => "SV004", "ten" => "Phạm Thị Dung", "gioitinh" => "Nữ", "lop" => "CNTT3"],
        ];
    $faculties = [ 
        "Công nghệ thông tin",  
        "Quản trị kinh doanh",  
        "Kế toán",  
        "Ngôn ngữ Anh" 
    ];
    $classes = [ 
    "A1" => "CNTT1", 
    "A2" => "CNTT2", 
    "A3" => "CNTT3", 
    "A4" => "CNTT4" 
    ];
    $genders = ["Nam", "Nữ", "Khác"]; 
    $hobbies = [ 
    "LT" => "Lập trình", 
    "DS" => "Đọc sách", 
    "AN" => "Âm nhạc", 
    "DL" => "Du lịch", 
    "TT" => "Thể thao" 
    ]; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
    <link rel="stylesheet" href="../CSS/lab2.css">
</head>
<body>
    <nav> 
        <ul> 
            <?php foreach ($menus as $menu) { ?> 
                <li>
                    <a href="#"><?= $menu ?></a> 
                </li> 
            <?php } ?> 
        </ul>
    </nav> 
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul> 
            <?php foreach ($subjects as $subject) { ?> 
                <li>
                    <?= $subject ?>
                </li> 
            <?php } ?> 
        </ul>
    </section>
    <section class="s2">
        <h4>Danh sách sinh viên</h4>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sinhvien as $i => $sv) { ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $sv["id"] ?></td>
                        <td><?= $sv["ten"] ?></td>
                        <td><?= $sv["gioitinh"] ?></td>
                        <td><?= $sv["lop"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
    <section class="s3">
        <h2>ĐĂNG KÝ THÔNG TIN SINH VIÊN.</h2>
        <form action = "" method="post">

            <label class="title" for="hoten">Họ và tên</label>
            <input type="text" id="hoten" nam="hoten" placeholder="Nhập họ và tên">

           <label class="title" for="khoa">Khoa</label>
                <select id="khoa" name="khoa">
                    <?php foreach ($faculties as $f) { ?>
                        <option value="<?= $f ?>"><?= $f ?></option>
                    <?php } ?>
                </select>
                <label class="title" for="lop">Lớp</label>
                <select id="lop" name="lop">
                    <?php foreach ($classes as $key => $name) { ?>
                        <option value="<?= $key ?>"><?= $name ?></option>
                    <?php } ?>
                </select>

            <label class="title">Giới tính</label>
                <?php foreach ($genders as $g) { ?>
                    <label class="option">
                        <input type="radio" name="gioitinh" value="<?= $g ?>"> <?= $g ?>
                    </label>
                <?php } ?>

                 <label class="title">Sở thích</label>
                <?php foreach ($hobbies as $key => $name) { ?>
                    <label class="option">
                        <input type="checkbox" name="sothich[]" value="<?= $key ?>"> <?= $name ?>
                    </label>
                <?php } ?>
                <div class="buttons">
                <button type="submit">Đăng ký</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </section>
</body>
</html>