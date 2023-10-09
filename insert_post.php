<?php
include('config.php');
//รับค่าตัวแปรจาก add_topic
$user_id = $_GET['userID'];
$post_name = $_POST['post_name'];
$detail = $_POST['post_detail'];
//เพิ่มข้อมูลกระทู้ลงตาราง topics
$sql = "INSERT INTO posts (post_name,detail,id) VALUES ('$post_name','$detail','$user_id')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('เพิ่มกระทู้เรียบร้อย');</script>";
    echo "<script>window.location= 'test_webbord.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถเพิ่มกระทู้ได้');</script>";
}
mysqli_close($conn);
