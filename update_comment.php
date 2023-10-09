<?php
include('config.php');
$comment_id = $_POST['comment_id'];
$comment = $_POST['comment'];

// แก้ไขข้อมูลใน DB
$sql = "UPDATE comments SET comment = '$comment' WHERE comment_id = '$comment_id'";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขการตอบกระทู้เรียบร้อย');</script>";
    echo "<script>window.location= 'my_comment.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขการตอบกระทู้ได้');</script>";
}
mysqli_close($conn);
