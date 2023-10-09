
<?php
session_start();
include('config.php');
if (!isset($_SESSION['user_id'])) {
    header('location: login.php'); 

}else{
    $myID = $_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headfoot/style.css">
    <link rel="stylesheet" href="css/nav/style.css">
    <link rel="stylesheet" href="backTohome.css">
    <style>
        body{
            background-color: #E6E6FA;
        }
    </style>
</head>
    <body>
        <header>
            <td><a href="test_webbord.php" class="btn btn-primary">Back</a></td>
               
        </header>
        <div class="container">
            <div class="h4 text-center alert alert-dark md-3 mt-3" role="alert">แสดงกระทู้</div>
            <!-- ปุ่มเพิ่มกระทู้ -->
                <a href="add_post.php?userID=<?= $_SESSION['user_id'] ?>" class="btn btn-success mb-4">Add</a>
            <table class="table table-striped-columns">
                <tr>
                    <!-- โชว์ชื่อฟิลด์ -->
                    <th>ID</th>
                    <th>Topic</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                // ดึงข้อมูลจาก DB
                $sql = "SELECT * FROM posts WHERE id = '$myID'";
                $result = mysqli_query($conn, $sql);
                // ดึงข้อมูลเรียบร้อย

                // แสดงกระทู้ทั้งหมดของเรา
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $row['post_id'] ?></td>
                        <td><?= $row['post_name'] ?></td>
                        <!-- ปุ่มต่างๆ -->

                            <td><a href="show_post.php?post_id=<?= $row['post_id'] ?>" class="btn btn-primary">Show</a></td>
                            <td><a href="edit_post.php?post_id=<?= $row['post_id'] ?>" class="btn btn-warning">Edit</a></td>
                            <td><a href="delete_post.php?post_id=<?= $row['post_id'] ?>" class="btn btn-danger" onclick="Del(this.href);return false;">Delete</a></td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
            </table>
        </div>

        <div class="emp-box2"></div>

        <footer>
            
        </footer>
    </body>

</html>
<!-- ถามความต้องการที่จะลบกระทู้ -->
<script language="Javascript">
    function Del(mypage) {
        var agree = confirm("คุณต้องการลบกระทู้หรือไม่");
        if (agree) {
            window.location = mypage;
        }
    }
</script>