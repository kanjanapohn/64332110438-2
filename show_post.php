<?php
include('config.php');
session_start();
//รับค่า topicID จาก webboard
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
} else {
    $post_id = $_SESSION['post_id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Topic</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headfoot/style.css">
    <link rel="stylesheet" href="css/comment-div/style.css">
    <link rel="stylesheet" href="css/nav/style.css">
    <style>
        body{
            background-color: #E6E6FA;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="h4 text-center alert alert-dark md-3 mt-3" role="alert">รายละเอียดกระทู้</div>
        <div class="form-control col-md-6">
            <?php
            // ดึงข้อมูลจาก DB ที่มี topicID ตรงกับตัวแปร
            $sql1 = "SELECT * FROM posts inner join users on posts.id = users.id WHERE post_id = '$post_id'";
            $sql2 = "SELECT * FROM comments inner join users on comments.id = users.id WHERE post_id = '$post_id'";
            $result1 = mysqli_query($conn, $sql1);
            $result2 = mysqli_query($conn, $sql2);
            $row1 = mysqli_fetch_array($result1);

            // ดึงข้อมูลเรียบร้อย


            ?>
            <div class="container">
                <!-- แสดงหัวข้อกระทู้และรายละเอียด -->
                <tr>
                    <strong><td><?= $row1['name'] ?></td></strong><br>
                </tr>
                <tr>
                    <strong><td><?= $row1['post_name'] ?></td></strong><br>
                </tr>
                <tr>
                    <td><?= $row1['detail'] ?></td><br>
                </tr>

                <!-- ตอบ comment -->
                <form action="comments.php?post_id=<?= $post_id ?>" method="POST">
                    <br>
                    <input type="text" name="comment" class="form-control" maxlength="500" maxrequired><br>
                    <input type="submit" name="submit" value="comment" class="btn btn-primary">
                    <input type="reset" name="reset" value="reset" class="btn btn-primary"><br><br>
                </form>
            </div>

            <?php while ($row2 = mysqli_fetch_array($result2)) { ?>
                <!-- แสดง comments -->
                <div class="comment-div border border-secondary">
                    <div class="break-box">
                    <tr>
                            <td><strong><?= $row2['name'] ?></strong></td><br>
                        </tr>
                        <tr>
                            <td><p class="box-break"><?= $row2['comment'] ?></p></td><br>
                        </tr>
                    </div>
                        
                    <!--ยังไม่เสร็จเพิ่ม userName-->
                </div><br>
            <?php }
            mysqli_close($conn); ?>
            <a href="test_webbord.php" class="btn btn-primary">Back</a>

        </div>

        <footer>
            
        </footer>

</body>

</html>