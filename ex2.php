<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Sriracha&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Sriracha", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    <!-- สิ้นสุดการเพิ่ม font -->
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 1</title>
</head>
<body>
    <h1>โปรแกรม ภาษา HTML</h1>
    664485015 นายณฐนนท์ ชุมเพ็ญ <br>
    หมู่เรียน 66/96 <br>
    <?php
        // ทดสอบ comment ภาษา php
        echo "<h2>สวัสดีปีใหม่</h2>";
        echo "<br>ขอให้ทุกคนประสบแต่ความสุข";
        // สร้างตัวแปร
        $name="ณฐนนท์";
        $surname="ชุมเพ็ญ";
        echo "<br>ชื่อของคุณคือ".$name." ".$surname;
        // ทดสอบตัวแปร ตัวเลข
        $x=15;
        $y=7;
        $z=$x+$y;
        echo "<br>ค่าผลบวกเท่ากับ".$z;
        $z=$x*$y;
        echo"<br>ค่าผลคูณเท่ากับ".$z;

    ?>
</body>
</html>