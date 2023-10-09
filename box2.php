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
                <h2>ภาคกลาง</h2>
                  <figure>ประเพณีลอยกระทงในภาคกลางเป็นที่นิยมกันอย่างแพร่หลายในทุกจังหวัดของภูมิภาคพื้นที่ภาคกลางค่ะ โดยการลอยกระทงในภาคกลางจะแบ่งกระทงเป็น 2 ประเภทด้วยกัน คือกระทงแบบพุทธ รังสรรค์จากวัสดุธรรมชาติ และตกแต่งด้วยดอกไม้สด ภายในกระทงมีลักษณะตั้งพุ่มทองน้อย 1-3 พุ่มตามขนาดของกระทง และประกอบไปด้วยธูป 1 ดอก กับเทียนอีก 1 เล่มค่ะ ส่วนอีกประเภทเรียกว่ากระทงแบบพราหมณ์ ซึ่งมีวิธีการทำคล้ายกับกระทงแบบพุทธ แต่มีความแตกต่างตรงที่กระทงแบบพราหมณ์จะไม่มีของสักการะอย่างดอกไม้ ธูป เทียน แต่จะใส่หมากพลู เหรียญ หรือตัดเส้นผม เล็บนิ้วมือ และนิ้วเท้า เพื่อเป็นการสะเดาะเคราะห์แทน</figure>
                 <div class="item1">
                    <figcaption><img src="img/วัดอรุณ1.jpg" alt=""></figcaption>
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