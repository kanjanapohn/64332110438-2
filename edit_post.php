<?php
include('config.php');
//รับค่า topicID จาก show_topic.php
session_start();
$post_id = $_GET['post_id'];
$sql = "SELECT * FROM posts WHERE post_id = '$post_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- แก้ไขชื่อกระท้อและรายละเอียด -->
    <div class="container">
        <form method="POST" action="update_post.php">
            <div class="h4 text-center alert alert-dark md-3 mt-3" role="alert">แก้ไขกระทู้</div>
            <label>ID กระทู้</label>
            <input type="text" name="post_id" class="form-control" readonly value="<?= $row['post_id'] ?>"><br>
            <label>ชื่อกระทู้</label>
            <input type="text" name="post_name" class="form-control" value="<?= $row['post_name'] ?>"><br>
            <label>รายละเอียด</label>
            <input type="text" name="detail" class="form-control" value="<?= $row['detail'] ?>"><br>
            <input type="submit" value="Update" class="btn btn-success">
            <a href="my_webbord.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>

</html>