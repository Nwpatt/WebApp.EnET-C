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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

<body>

    <h1 style="text-align: center">Webboard's Nwpatt</h1>
    <hr>
    <center>
        <?php
        $login = $_POST["login"];
        $pwd = $_POST["pwd"];

        if (($login == "admin") && ( $pwd == "ad1234")){
            echo "<p>ยินดีต้อนรับคุณ ADMIN</p>";
            $_SESSION["username"]="admin";
            $_SESSION["role"]="a";
            $_SESSION["id"]="session_id()";}

        elseif (($login == "member") && ($pwd == "mem1234")){
            echo "<p>ยินดีต้อนรับคุณ MEMBER</p>";
            $_SESSION["username"]="member";
            $_SESSION["role"]="m";
            $_SESSION["id"]="session_id()";}
            
        else{
            echo "<p>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</p>";}
        ?>
        <a href="index.php">เข้าสู่หน้าหลัก</a>
    </center>

</body>

</html>