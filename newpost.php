<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New post</title>
</head>

<body>
    <center>
        <h1>Webboard's Nwpatt</h1>
        <hr>
    </center>
    <span>ผู้ใช้ : <?php echo $_SESSION["username"]; ?> </span><br>
    <form action="" method="GET">
    <table>
        <tr>
            <td>หมวดหมู่ :</td>
            <td><select name="category">
                    <option value="all">--ทั้งหมด--</option>
                    <option value="genaral">เรื่องทั่วไป</option>
                    <option value="stady">เรื่องเรียน</option>
                </select><br></td>
        </tr>
        <tr>
            <td>หัวข้อ :</td>
            <td><input type="text" name="title"><br></td>
        </tr>
        <tr>
            <td>เนื้อหา :</td>
            <td><textarea name="about" cols="40" rows="10"></textarea><br></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="บันทึกข้อความ" /></td>
        </tr>
    </table>
    </form>
</body>
</html>