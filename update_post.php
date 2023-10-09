<?php
include('config.php');
//รับค่าตัวแปรจาก edit_topic
$post_id = $_POST['post_id'];
$post_name = $_POST['post_name'];
$detail = $_POST['detail'];

// แก้ไขข้อมูลใน DB
$sql = "UPDATE posts SET post_name = '$post_name',detail = '$detail' WHERE post_id = '$post_id'";
$result = mysqli_query($conn,$sql);
// แก้ไขข้อมูลใน DB เรียบร้อย

if($result){
    echo "<script>alert('แก้ไขกระทู้เรียบร้อย');</script>";
    echo "<script>window.location= 'my_webbord.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขกระทู้ได้');</script>";
}
mysqli_close($conn);
