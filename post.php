<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board of post</title>
</head>

<body>
    <center>
        <h1>Webboard's Nwpatt</h1>
        <hr>
        <p> ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"] ?></p><br>
        <table style="border: 2px solid black ; width: 40%">
            <td style="background-color: #6cd2fe">แสดงความคิดเห็น</td>
            <tr>
                <td>
                    <textarea name="" id="" cols="100" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" value="ส่งข้อความ">
                </td>
            </tr>
        </table>
    </center>
    <p align="center">
        <a href="index.html"> กลับไปหน้าหลัก</a>
    </p>
</body>
</html>