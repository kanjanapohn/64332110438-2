<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test_webboard.css " 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>   
<div class="container bg">
  <div class="navBar">
    <div class="logo">
      <a href="#">
        <i class="fas fa-suitcase-rolling"></i>
      </a>
      </div>
    <div class="body">
    <h2 class="lopo">WEBBOARD</h2>
    </div>
    <ul>
      <li><a href="main.php">Homepage</a></li>
      <li><a href="my_webbord.php">myblog</li>
      <li><a href="my_comment.php">mycomment</a></li>
      
    </ul>
    <div>
    <?php if (isset($_SESSION['user_name'])) :?>
               <i class="fa-solid fa-user"></i>
               <div class="dropdown">
                 <link rel="stylesheet" href="aferlogin.css">
                  <p class="dropbtn" style="cursor: pointer;"><?php echo$_SESSION['user_name'] ?></p>
                  <div class="dropdown-content">
                     <p class="logout"><a href="main.php?logout='1'" style="color: red;">logout</a></p>
                  </div>
               </div>
            <?php endif ?>
    <ul class="log-in">
         <li><a href="login.php">Sign In</a></li>
   </div>
    </div>
    <title>Web Board</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <!-- <div class="body"> -->
        <div class="container ">
            <div class="h4 text-center alert alert-dark md-3 mt-3" role="alert">แสดงกระทู้</div>
            <!-- ปุ่มเพิ่มกระทู้ -->
            <?php if (isset($_SESSION['user_id'])) { ?>
                <a href="add_post.php?userID=<?= $_SESSION['user_id'] ?>" class="btn btn-success mb-4">Add</a>
            <?php } ?>
            <table class="table table-striped-columns">
                <tr>
                    <!-- โชว์ชื่อฟิลด์ -->
                    <th>User</th>
                    <th>ID</th>
                    <th>Topic</th>
                    <th>Show</th>
                </tr>
                <?php
                // ดึงข้อมูลจาก DB
                $sql3 = "SELECT COUNT(post_id) AS countPost FROM posts";
                $resilt3 = mysqli_query($conn,$sql3);  
                $row3 = mysqli_fetch_array($resilt3);
                $sql = "SELECT users.name, posts.post_id, posts.post_name FROM posts inner join users on posts.id = users.id";
                $result = mysqli_query($conn, $sql);
                // ดึงข้อมูลเรียบร้อย

                // แสดงกระทู้ทั้งหมดของเรา
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <!--ดึงข้อมูลแสดง userName-->
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['post_id'] ?></td>
                        <td><?= $row['post_name'] ?></td>
                        <!-- ปุ่มต่างๆ -->
                        <!-- show_post.php can modify -->
                        <td><a href="show_post.php?post_id=<?= $row['post_id'] ?>" class="btn btn-primary">Show</a></td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
            </table>
             <div><p style="color: #fff;">จำนวนกระทู้ <?php echo $row3['countPost']?></p></div>
             
        </div>
    <!-- </div> -->
    <footer>
         
    </footer>
</body>



</html>