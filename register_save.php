<?php
session_start();

    $login  = $_POST['login'];
    $passwd = $_POST['pwd'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email  = $_POST['email'];

    // ออกสอบ
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
    $passwd = sha1($passwd);

    // คิวรี่ห้าม login ซ้ำ ออกสอบ!!
    $sql = "SELECT * FROM user where login='$login'";
    $result = $conn->query($sql);
    if($result->rowCount()==1){
        $_SESSION['add_login']='error';
    }
    else{
        $sql = "INSERT INTO user (login, password, name, gender, email, role)
        VALUE ('$login','$passwd','$name','$gender','$email','m')";
        $conn->exec($sql);
        $_SESSION['add_login']='success';
    }

    $conn=null;
    header("location:register.php");
    die();
?>