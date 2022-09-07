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
            echo "<p>ยินดีต้อนรับคุณ ADMIN</p>";}
        elseif (($login == "member") && ($pwd == "mem1234")){
            echo "<p>ยินดีต้อนรับคุณ MEMBER</p>";}
        else{
            echo "<p>ชื่อบัญชีหรอืรหัสผ่านไม่ถูกต้อง</p>";}
        ?>
    </center>

</body>

</html>