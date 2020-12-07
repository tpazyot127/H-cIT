<?php
require("../config/connect.php");
//khởi tạo session ,tắt trình duyệt là out
session_start();

if (isset($_POST["login"])) {
    $us = $_POST["us"];
    $pa = $_POST["pa"];
    $sql = "select * from tbl_user where us like '$us' and pa like '$pa'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["username"] = $us;
        header("Location:mana_danhmuc.php");
    } else {
        echo "sai us or pa";
    }
}
?>

<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liên Hệ QC</title>
    <link rel="stylesheet" href="../css/hung.css">
</head>

<title>CÔNG TY DU LỊCH HUMG</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400">
<link rel='stylesheet' id='professional-style-css' href='../css/style.css?ver=4.9.1' type='text/css' media='all' />
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../css/bootstrap.css">
<script type="text/javascript" src="http://www.nitinh.com/static/jquery-1.4.1.js"></script>
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="shortcut icon" href="../imgs/logohumg.png">
</head>

<body>
    <div id="jquery-script-menu">
        <div class="jquery-script-center">
            <ul>
                <img src="../imgs/logohumg.png">
            </ul>
            <div class="" style="margin-left: 300px;">
                <h1> CÔNG TY DU LỊCH BỐC BÁT HỌ(ANH BÌNH GOLD)</h1>
                <p><strong>Địa chỉ: Phố Viên - Phường Đức Thắng - Bắc Từ Niêm - Hà Nội</strong></p>
            </div>
            <div class="jquery-script-clear"></div>
        </div>
    </div>
    <nav id="nav" role="navigation">
        <a href="#nav" title="Show navigation">Show navigation</a>
        <a href="#" title="Hide navigation">Hide navigation</a>
        <ul class="clearfix">
            <li><a href="../index.php">Home</a></li>
            <li> <a href="#"><span>Menu Du Lịch</span></a>
                <ul>
                    <li><a href="#" title="Trong Nước">Du Lịch Trong Nước</a></li>
                    <li><a href="#" title="Nước ngoài">Du Lịch Nước ngoài</a></li>
                    <li><a href="#" title="Du Lịch Khách Đoàn">Du Lịch Khách Đoàn</a></li>
                    <li><a href="#" rel="Du Lịch Hành Hương">Du Lịch Hành Hương</a></li>
                    <li><a href="#" title="DU Lịch Tự Chọn">DU Lịch Tự Chọn</a></li>
                    <li><a href="#" title="Tour Nghỉ Lễ">Tour Nghỉ Lễ</a></li>
                </ul>
            </li>
            <li> <a href="#"><span>Dịch Vụ</span></a>
                <ul>
                    <li> <a href="#">Lưu Trú</a></li>
                    <li> <a href="../bookvemaybay.html">BOOK Vé Máy Bay</a></li>
                    <li> <a href="#">BOOK Khách Sạn </a></li>
                    <li> <a href="thuexe.html">Thuê Xe</a></li>
                    <li> <a href="#">Taxi Sân Bay</a></li>
                    <li> <a href="../diadiemdulich.html">Địa Điểm Tham Quan</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </li>
            <li> <a href="#">Liên Hệ QC</a>
        </ul>
        <h2></h2>
        <div style="background-image: url('../525b727065defb3.jpg_wh860.jpg');height:300px;padding-top:50px">

            <div class="contain">
                <img src="../hotline.png" alt="Smiley face" style="float:right;width:200px;height:200px;">
                <form action="login.php" method="post">
                    <label for="exampleInputEmail1">User Name</label>
                    <input style="width: 40%" type="text" name="us" class="form-control" require>
                    <label for="exampleInputPassword1">Password</label>
                    <input style="width: 40%" type="password" name="pa" class="form-control" require>
                    <button type="submit" name="login" class="btn btn-primary" require>Đăng Nhập</button>
                </form>
                <a href="signup.php" class="btn btn-primary">Đăng kí</a>
            </div>
        </div>
    </nav>
</body>

</html>