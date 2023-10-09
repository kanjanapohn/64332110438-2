<?php
include('config.php');
//รับค่า commentID
$comment_id = $_GET['comment_id'];
// ลบข้อมูลออกจากตาราง comments
$sql = "DELETE FROM comments WHERE comment_id = '$comment_id'";
if(mysqli_query($conn, $sql)){
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('ลบการตอบกระทู้เรียบร้อย');</script>";
        echo "<script>window.location= 'my_comment.php';</script>";
    } else {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถลบการตอบกระทู้ได้');</script>";
    }
}
mysqli_close($conn);
