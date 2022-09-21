<?php
session_start();
if(isset($_SESSION["id"])){
  header("Location:index.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register page</title>
  </head>
  <body>
    <h1 align="center">สมัครสมาชิก</h1>
    <hr />

    <table style="border: 2px solid black; width: 40%" align="center">
      <tr>
        <td style="background-color: #6cd2fe" colspan="2">กรอกข้อมูล</td>
      </tr>
      <tr>
        <td>ชื่อบัญชี :</td>
        <td><input type="text" name="username" size="50" /></td>
      </tr>
      <tr>
        <td>รหัสผ่าน :</td>
        <td><input type="password" name="pwd2" size="50" /></td>
      </tr>
      <tr>
        <td>ชื่อ-สกุล :</td>
        <td>
          <input type="text" name="FirstLastName" size="50" />
        </td>
      </tr>
      <tr>
        <td>เพศ :</td>
        <td>
          <input type="radio" name="gendet" value="m" /> ชาย
          <br />
          <input type="radio" name="gender" value="w" /> หญิง
          <br />
          <input type="radio" name="gender" value="anoter" /> อื่นๆ
        </td>
      </tr>
      <tr>
        <td>อีเมล :</td>
        <td>
          <input type="text" name="email" size="50" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="submitresgis" />
        </td>
      </tr>
    </table>

    <a href="index.php"> กลับไปหน้าหลัก</a>
  </body>
</html>