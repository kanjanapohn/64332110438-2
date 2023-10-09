<?php

@include 'config.php';

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_password']);
    header('location: main.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="box_style.css">
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="container bg">
                <div class="navBar">
                  <div class="logo">
                    <a href="#">
                      <i class="fas fa-suitcase-rolling"></i>
                    </a>
                  </div>
                  <ul>
                    <li><a href="main.php">Homepage</a></li>
                    <li><a href="my_webbord.php">Webboard</a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
                    <div>
    
    </div>
                  
                </div>
        <main>
            <article>
                <h2>ภาคตะวันออกเฉียงเหนือ</h2>
                  <figure>ในอดีตนั้นมีการเรียกประเพณีลอยกระทงประจำภูมิภาคอีสานว่า “สิบสองเพ็ง” มีความหมายว่าวันเพ็ญเดือน 12 ซึ่งจะมีการจัดกิจกรรมที่มีเอกลักษณ์แตกต่างออกไปในแต่ละจังหวัดดังนี้</figure>
                 <div class="item1">
                    <figcaption><img src="img/kratong_sai_03.jpg" alt=""></figcaption>
                    <figure><p>ร้อยเอ็ด ประเพณี “สมมาน้ำคืนเพ็ง เส็งประทีป” เป็นภาษาถิ่นของจังหวัดร้อยเอ็ด มีความหมายว่าการขอขมาพระแม่คงคาในคืนวันเพ็ญเดือนสิบสองค่ะ โดยงานจะจัดขึ้นที่บริเวณเกาะบึงพลาญชัย กลางเมืองร้อยเอ็ด ตกแต่งแสงสีเสียงให้สวยงาม มีการประกวดชิงรางวัลหลากหลายรายการ และกิจกรรมอื่นๆ อีกมากมายค่ะ</p></figure>
                    <figure><p>สกลนคร ประเพณี “สิบสองเพ็งไทสกล” มีการจัดกิจกรรมลอยพระประทีป เป็นการจัดทำกระทงรูปทรงดอกบัวลอยไปตามสายน้ำไหลในสถานที่บริเวณหนองหาน ทะเลสาบน้ำจืดที่มีขนาดใหญ่ติดอันดับในภูมิภาคตะวันออกเฉียงเหนือ ซึ่งในอดีตก่อนที่จะมาลอยกระทงแบบปัจจุบัน จะมีการใช้วัสดุกาบกล้วยในการทำกระทง และรังสรรค์ขึ้นในลักษณะรูปทรงคล้ายการทำปราสาทผึ้งโบราณค่ะ</p></figure>
                 </div>
            </article>
        </main>
    </div>
</body>
<footer>
<p style="color: #fff;">&copy; 2023 Whee In The Mood</p>
</footer>
</html>