<?php
session_start();
if (isset($_SESSION["id"])) {
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  </link>
  <title>register page</title>
</head>

<body>
  <div class="container">
    <h1 style="text-align: center">Webboard's Nwpatt</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <?php
        if (isset($_SESSION['add_login'])) {
          if ($_SESSION['add_login'] == 'error') {
            echo "<div class='alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
          } else {
            echo "<div class='alert alert-success'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";
          }
          unset($_SESSION['add_login']);
        }
        ?>
        <div class="card text-dark bg-white border-primary">
          <div class="card-header bg-primary text-white">กรอกข้อมูล</div>
          <div class="card-body">
            <form action="register_save.php" method="post">
              <div class="row mb-2">
                <label class="col-md-3 col-form-label">ชื่อบัญชี :</label>
                <div class="col-md-9">
                  <input type="text" name="login" class="form-control" required>
                </div>
              </div>
              <div class="row mb-2">
                <label class="col-md-3 col-form-label">รหัสผ่าน :</label>
                <div class="col-md-9">
                  <input type="password" name="pwd" class="form-control" required>
                </div>
              </div>
              <div class="row mb-2">
                <label class="col-md-3 col-form-label">ชื่อ-นามสกุล :</label>
                <div class="col-md-9">
                  <input type="text" name="name" class="form-control" required>
                </div>
              </div>
              <div class="row mb-2">
                <label class="col-md-3 col-form-label pt-0">เพศ :</label>
                <div class="col-md-9">
                  <div class="form-check">
                    <input type="radio" name="gender" value="m" class="form-check-input" required>
                    <label class="form-check-label">ชาย</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="gender" value="f" class="form-check-input" required>
                    <label class="form-check-label">หญิง</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="gender" value="o" class="form-check-input" required>
                    <label class="form-check-label">อื่นๆ</label>
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <label class="col-md-3 col-form-label">อีเมล :</label>
                <div class="col-md-9">
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="row mb-2">
                <label class="col-md-3 col-form-label"></label>
                <div class="col-md-9">
                  <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-hand-index pe-2"></i>สมัครสมาชิก</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    <!-- <form>
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
    </form> -->
    <center>
      <button class="btn btn-sm mt-3" style="background-color :#d3d3d3"><a href="index.php" class="text-decoration-none text-dark"><i class="bi bi-bookmark-heart-fill pe-2"></i>กลับไปหน้าหลัก</a></button>
      <!-- <a href="index.php"> กลับไปหน้าหลัก</a> -->
    </center>
  </div>
</body>

</html>