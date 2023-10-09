<?php
include('config.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('location: login.php'); 

}else{
    //รับค่า topicID และ comments จาก show_topic.php
$post_id = $_GET['post_id'];
$user_id = $_SESSION['user_id'];
$comment = $_POST['comment'];
// บันทึกข้อมูลลงตาราง comments
$sql = "INSERT INTO comments (comment,id,post_id) VALUES ('$comment','$user_id','$post_id')";
$result = mysqli_query($conn, $sql);
$_SESSION["post_id"] = $post_id;
header("location:show_post.php");
//บันทึกเรียบร้อย
}
