<?php
    $menus=["Trang chủ","Tin tức","Liên hệ","Giới thiệu"];
    $subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"]; 
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
        <ul> 
            <?php foreach ($subjects as $subject) { ?> 
                <li>
                    <?= $subject ?>
                </li> 
            <?php } ?> 
        </ul>
    </section>
</body>
</html>