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
    <link rel="stylesheet" href="page.css " 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color: black;
        }
    </style>
</head>   
<div class="container bg">
  <div class="navBar">
    <div class="logo">
      <a href="#">
        <i class="fas fa-suitcase-rolling"></i>
      </a>
    </div>
    <ul>
      <li><a href="main.php">Homepage</a></li>
      <li><a href="test_webbord.php">Webboard</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div>
    <?php if (isset($_SESSION['user_name'])) :?>
               <i class="fa-solid fa-user"></i>
               <div class="dropdown">
                 <link rel="stylesheet" href="aferlogin.css">
                  <p class="dropbtn" style="cursor: pointer;"><?php echo$_SESSION['user_name'] ?></p>
                  <div class="dropdown-content">
                     <p class="logout"><a href="main.php?logout='1'" style="color: red;">logout</a></p>
                  </div>
               </div>
            <?php endif ?>
    <ul class="log-in">
         <li><a href="login.php">Sign In</a></li>
   </div>
    </div>
   

  <div class="content">
    <div class="kratong" style="width:50%;">
      <div class="tnx">
        <h2><i class="fas fa-map-marker-alt"></i> Thailand</h2>
      </div>
      <div class="txt">
        <h1>Loy Krathong Festival</h1>
      </div>
      <p>วันลอยกระทง เป็นเทศกาลของกลุ่มชาติพันธุ์ไทตะวันออกเฉียงใต้รวมทั้งประเทศไทย ตรงกับวันขึ้น 15 ค่ำ เดือน 12 ตามปฏิทินจันทรคติไทย ประเพณีนี้กำหนดขึ้นเพื่อเป็นการสะเดาะเคราะห์และขอขมาต่อพระแม่คงคาซึ่งเป็นเทวดาในคติฮินดู แต่เทศกาลนี้มีร่องรอยหลักฐานย้อนไปถึงจีนและอินเดียโบราณ
            ในประเทศไทยมีชื่อเรียกว่าลอยกระทง ส่วนประเทศอื่น ๆ มีชื่อเรียกแตกต่างกัน โดยประเทศพม่ามีชื่อว่า "เทศกาลตาซองได", ประเทศศรีลังกามีชื่อว่า "Il Full Moon Poya" และประเทศจีนมีชื่อว่า "เทศกาลโคมไฟ</p>
    </div>
    

    <div class="card" style="width:50%;">
      <a href="box1.php" target="_blank">
        <div class="box1">
          <h2>ภาคใต้</h2>
        </div>
      </a>
      <a href="box2.php" target="_blank">
        <div class="box2">
          <h2>ภาคกลาง</h2>
        </div>
      </a>
      <a href="box3.php" target="_blank">
        <div class="box3">
          <h2>ภาคอีสาน</h2>
        </div>
      </a>
      <a href="box4.php" target="_blank">
        <div class="box4">
          <h2>ภาคเหนือ</h2>
        </div>
      </a>
      <!--       <div class="box2">
        <h2>Island</h2>
      </div>
      <div class="box3">
        <h2>Mountain</h2>
      </div>
      <div class="box4">
        <h2>Scenery</h2>
      </div> -->
    </div>
  </div>

</div>
</body>
<footer>
<p style="color: #fff;">&copy; 2023 Whee In The Mood</p>
</footer>
</html>