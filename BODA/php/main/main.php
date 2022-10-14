<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트 만들기</title>

    <!-- css -->
    <link rel="stylesheet" href="../../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../../html/assets/css/reset.css">

    <link rel="stylesheet" href="../../html/assets/css/agree.css">

    <link rel="stylesheet" href="../../html/assets/css/header.css">
    <link rel="stylesheet" href="../../html/assets/css/loginPopup.css">
    <link rel="stylesheet" href="../../html/assets/css/footer.css">
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">콘텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>

    <?php include "../include/header.php" ?>
    <?php include "../login/login.php" ?>
    <!-- //header -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <?php include "../include/script.php" ?>
    <!-- //login -->

</body>
</html>