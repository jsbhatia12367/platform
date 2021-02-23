<?php include 'userinfo_user.php';?>
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
    <?php include 'LeftMenu.php'; ?>

  </header>
  <section class="page-content">
    <section class="grid">
      <article style="height: 550px">
        <div class="main__container">
          <div class="main__title">
            <div class="main__greeting">
              <h1>Certificates</h1>
            </div>
          </div>
          <table class="content-table">
            <thead>
              <tr>
                <th>Sr.No</th>
                <th>Course Name</th>
                <th>Certificate</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sr_no = 1;
              $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
              $sql = pg_query(sprintf("SELECT * FROM public.enroll where completed=true AND certificate_generated=true AND emailaddress ='" . pg_escape_string($_SESSION['Email']) . "';"));
              while ($row = pg_fetch_assoc($sql)) { 
                $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT course_name FROM public.courses where course_id='".$row['course_id']."' ;")));
                echo "<tr>
                    <td>".$sr_no."</td>
                    <td>".$sql2['course_name']."</td>
                    <td><a href='../admin/certificates/" . htmlspecialchars($row['certificate']) . "'>" . htmlspecialchars($row['certificate']) . "</a></td>
                    </tr>";
                $sr_no = $sr_no + 1;    
              }
              ?>
            </tbody>
          </table>
        </div>
      </article>
    </section>
  </section>
</body>
<footer class="page-footer">
</footer>