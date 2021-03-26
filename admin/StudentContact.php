<?php include 'userinfo_admin.php'; ?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;">
</svg>
</head>

<body>
<header class="page-header">
  <?php include 'LeftMenu.php';?>
</header>
<section class="page-content">
  <section class ="grid">
    <article style="height: 800px">
      <div class="main__container">
        <div class="main__title">
            <div class="main__greeting">
              <h1>Student Information</h1>
            </div>
            
            </div>
        <table class="content-table">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Edit</th>
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
            <?php
            $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
            $sql= pg_query(sprintf("select * from cmhauser"));
            $count = 0;
            while ($row = pg_fetch_assoc($sql)) {
              $count = $count + 1;
              echo "<tr><td>".htmlspecialchars($row['cmhauserid'])."</td>
              <td>".htmlspecialchars($row['username'])."</td>
              <td>".htmlspecialchars($row['firstname'])."</td>
              <td>".htmlspecialchars($row['lastname'])."</td>
              <td>".htmlspecialchars($row['emailaddress'])."</td>
              <td>".htmlspecialchars($row['phonenumber'])."</td>
              <td><a href='EditMyAccount.php?StudentEmail=".htmlspecialchars($row['emailaddress'])."'>Edit</a></td>
              <tr>";
            }
            if($count==0)
            echo"<tr><td>No Student Available</td></tr>";
            ?>
            </tbody>
          </table>
    </article>
    </SECTION>
  <footer class="page-footer">
  </footer>
</section>
</body>