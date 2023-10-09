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
                <h2>ภาคเหนือ</h2>
                  <figure>การลอยกระทงของชาวใต้จะไม่มีกำหนดระบุเวลาที่แน่ชัดเหมือนกับ 3 ภูมิภาคข้างต้น แต่มักจะลอยเมื่อมีโรคภัยไข้เจ็บมากล้ำกราย จึงถือว่าการลอยกระทงเป็นวิธีลอยแพสะเดาะเคราะห์ค่ะ โดยกระทงของชาวปักษ์ใต้มักนำเอาหยวกกล้วยมาแกะสลักเป็นลวดลายสวยงาม ให้มีรูปร่างลักษณะเป็นแพ เพื่อบรรจุเครื่องอาหาร ดอกไม้ ธูป เทียนค่ะ ตามแอดมินมาดูเทศกาลลอยกระทงในแต่ละจังหวัดปักษ์ใต้กันสักหน่อยว่ามีสีสัน และบรรยากาศอย่างไรกันบ้าง</figure>
                 <div class="item1">
                    <figcaption><img src="img/loi-krathong-yi-peng-thailand-f2160de85c654a37a2b8bea0f17b0819.jpg" alt=""></figcaption>
                    <figure><p>เชียงใหม่ มีการจัดประเพณี “ยี่เป็ง” ที่เน้นกิจกรรมการทำบุญในวันเพ็ญเดือนสองของชาวล้านนา และในช่วงเย็นจะมีการปล่อยโคมลอยขึ้นสู่ท้องฟ้า ซึ่งเปรียบเสมือนการปลดปล่อยทุกข์โศกให้ลอยออกไปจากชีวิตค่ะ แต่ในปัจจุบันนี้การปล่อยโคมลอยอาจจะเป็นการปล่อยทุกข์จากตัวเอง จนไปกระทบคนอื่น จึงมีการรณรงค์ให้หยุดปล่อยโคมลอยขึ้นสู่ท้องฟ้า แต่อาจจะเปลี่ยนวิธีการเป็นปล่อยโคมลอยออนไลน์ ก็ถือเป็นอีกหนึ่งช่องทางการแก้ปัญหาที่ดีเลยทีเดียว</p></figure>
                    <figure><p>ตาก มีการจัดประเพณี “ลอยกระทงสาย” ที่นำเอาพระพุทธศาสนาและภูมิปัญญาชาวบ้านมาผนวกรวมกัน ซึ่งสืบทอดกันมาอย่างช้านาน โดยการใช้กะลามะพร้าวแทนกระทงธรรมดา เรียงร้อยทอดยาวไปเป็นสายต่อเนื่องในแม่น้ำปิง ทำให้แสงเทียนในกระทงส่องแสงระยิบระยับ มีความสวยงามมาก</p></figure>
                     <figure><p>สุโขทัย ประเพณี “เผาเทียนเล่นไฟ” เป็นกิจกรรมการเฉลิมฉลองของชาวสุโขทัยในสมัยก่อน โดยจะมีการลอยกระทงจุดประทีปโคมไฟ จุดตะไลไฟพะเนียง ที่มาพร้อมกับกิจกรรมการละเล่นพื้นบ้าน และการจัดประกวดนางนพมาศ ท่ามกลางบรรยากาศและสิ่งแวดล้อมของโบราณสถานในบริเวณเมืองเก่าของจังหวัดสุโขทัย</p></figure>
                 </div>
            </article>
        </main>
    </div>
</body>
<footer>
<p style="color: #fff;">&copy; 2023 Whee In The Mood</p>
</footer>
</html>