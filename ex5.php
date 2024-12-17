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
    <h1>โปรแกรม ภาษา PHP สร้างฟอร์มข้อมูล</h1>
    664485015 นายณฐนนท์ ชุมเพ็ญ <br>
    หมู่เรียน 66/96 <br>

    <form action="ex6.php" method="POST">
        ชื่อ <input type="text" name="n"><br>
        นามสกุล <input type="text" name="s"><br>
        <input type="submit" value="กรอกข้อมูล"><br>
    </form>
</body>
</html>