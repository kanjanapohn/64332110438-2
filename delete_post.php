<?php
include('config.php');
//รับค่า topicID จาก show_topic.php
$post_id = $_GET['post_id'];
// ลบข้อมูลออกจากตาราง topics
$sql1 = "DELETE FROM posts WHERE post_id = '$post_id'";
$sql2 = "DELETE FROM comments WHERE post_id = '$post_id'";
if(mysqli_query($conn, $sql2)){
    if (mysqli_query($conn, $sql1)) {
        echo "<script>alert('ลบกระทู้เรียบร้อย');</script>";
        echo "<script>window.location= 'my_webbord.php';</script>";
        // กลับไปหน้า show_topic
    } else {
        echo "Error : " . $sql1 . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถเพิ่มกระทู้ได้');</script>";
    }
}
mysqli_close($conn);
