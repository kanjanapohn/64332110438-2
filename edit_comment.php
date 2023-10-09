<?php
include('config.php');
//รับค่า topicID จาก show_topic.php
$comment_id = $_GET['comment_id'];
$sql = "SELECT * FROM comments WHERE comment_id = '$comment_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comment</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headfoot/style.css">
    <link rel="stylesheet" href="css/nav/style.css">
</head>

<body>
    <!-- แก้ไขชื่อกระท้อและรายละเอียด -->
    <div class="container">
        <form method="POST" action="update_comment.php">
            <div class="h4 text-center alert alert-dark md-3 mt-3" role="alert">แก้ไขการตอบกระทู้</div>
            <label>ID Comment</label>
            <input type="text" name="comment_id" class="form-control" readonly value="<?= $row['comment_id'] ?>"><br>
            <label>Comment</label>
            <input type="text" name="comment" class="form-control" value="<?= $row['comment']?>"><br>
            <input type="submit" value="Update" class="btn btn-success">
            <a href="my_comment.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>

</html>