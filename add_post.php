<?php
session_start();
include('config.php');
$user_id = $_GET['userID'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Topic</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/headfoot/style.css">
    <link rel="stylesheet" href="css/nav/style.css">
</head>

<body>
    <!-- input data LOGIN -->
    <div class="container">
        <form method="POST" action="insert_post.php?userID=<?=$user_id?>">
            <div class="h4 text-center alert alert-dark md-3 mt-3" role="alert">เพิ่มกระทู้</div>
            <label>ชื่อกระทู้</label>
            <input type="text" name="post_name" class="form-control" placeholder="ชื่อกระทู้" required><br>
            <label>รายละเอียด</label>
            <input type="text" name="post_detail" class="form-control" placeholder="รายละเอียด" required><br>
            <input type="submit" value="submit" class="btn btn-success">
            <a href="test_webbord.php" class="btn btn-danger">cancel</a>
        </form>
    </div>

</body>

</html>