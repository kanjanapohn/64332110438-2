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
                <h2>ภาคใต้</h2>
                  <figure>การลอยกระทงของชาวใต้จะไม่มีกำหนดระบุเวลาที่แน่ชัดเหมือนกับ 3 ภูมิภาคข้างต้น แต่มักจะลอยเมื่อมีโรคภัยไข้เจ็บมากล้ำกราย จึงถือว่าการลอยกระทงเป็นวิธีลอยแพสะเดาะเคราะห์ค่ะ โดยกระทงของชาวปักษ์ใต้มักนำเอาหยวกกล้วยมาแกะสลักเป็นลวดลายสวยงาม ให้มีรูปร่างลักษณะเป็นแพ เพื่อบรรจุเครื่องอาหาร ดอกไม้ ธูป เทียนค่ะ ตามแอดมินมาดูเทศกาลลอยกระทงในแต่ละจังหวัดปักษ์ใต้กันสักหน่อยว่ามีสีสัน และบรรยากาศอย่างไรกันบ้าง</figure>
                 <div class="item1">
                    <figcaption><img src="img/Thai-Festival.jpg" alt=""></figcaption>
                    <figure><p>สุราษฎร์ธานี ประเพณีลอยกระทง “สีสันแห่งสายน้ำเมืองคนดี” มีขบวนแห่กระทงสวยงามตระการตา จัดกิจกรรมประกวดต่างๆ และมีมหรสพรื่นเริงให้ชาวสุราษฎร์ธานีร่วมสนุกสนานมากมายค่ะ</p></figure>
                    <figure><p>สงขลา จะมีการจัดงานประเพณีลอยกระทง “สีสันแห่งสายน้ำ มหกรรมลอยกระทง” ในอำเภอหาดใหญ่ ซึ่งเป็นเมืองศูนย์กลางของจังหวัดสงขลา เพื่อสืบสานวัฒนธรรมการลอยกระทงในคงอยู่ต่อไป ซึ่งภายในงานจะมีการจัดแสดงโคมไฟสีสันเมืองใต้สวยงาม และบรรยากาศการลอยกระทงร่วมกันอย่างมีความสุขค่ะ</p></figure>
                 </div>
            </article>
        </main>
    </div>
</body>
<footer>
<p style="color: #fff;">&copy; 2023 Whee In The Mood</p>
</footer>
</html>