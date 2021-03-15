<?php include 'userinfo_user.php'; ?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
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
              <h1>Student Information</h1>
            </div>
          </div>
          <table class="content-table">
            <thead>
              <tr>
                <th>Sr.No</th>
                <th>Course Name</th>
                <th>Course Data</th>
                <th>Completed</th>
                <!--<th>Certificate</th>-->
              </tr>
            </thead>
            <tbody>


              <?php
              $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
              $sql = pg_query(sprintf("SELECT * FROM public.enroll where emailaddress ='" . pg_escape_string($_SESSION['Email']) . "';"));
              $sr_no = 1;

              while ($row = pg_fetch_assoc($sql)) {

                $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.courses where course_id =" . htmlspecialchars($row['course_id']) . ";")));

                echo "<tr>";

                echo "<td>$sr_no</td>";
                echo "<td>" . htmlspecialchars($sql2['course_name']) . " </td>";
                // echo $row['course_data'];
                echo "<td><a href='../admin/uploads/" . htmlspecialchars($sql2['course_data']) . "'>" . htmlspecialchars($sql2['course_data']) . "</a></td>";

                // $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT completed FROM public.enroll where roll_no = 'MT2019052' and course_id = 1;")));
                $status = $row['completed'] === 'f';

                if ($status) {
                  echo "<td><button id='" . $row['course_id'] . "' value='" . $row['emailaddress'] . "' class='btn btn-primary'>Yes</button></td>";
                  // echo "<td><form><input name='accept' type='submit' id='".$row['course_id']."' value='".$row['emailaddress']."'></td></form>";
                } else
                  echo "<td>Completed</td>";
                echo "</tr>";
                $sr_no++;
              }
              pg_close($db); ?>

               

              <script src="../js/jquery-3.6.0.min.js"></script>
              <script>
                $(document).ready(function() {
                  $("button").click(function() {
                   
                    $.ajax({
                      type: "POST",
                      url: 'ajax.php',
                      data: {
                        action: 'call_this',
                        course_id:  $(this).attr('id'),
                        emailaddress: $(this).attr('value'),
                      },
                      success: function(html) {
                        location.reload();
                      }

                    });

                  });
                });
              </script>




            </tbody>
          </table>
        </div>
      </article>
    </section>
  </section>
</body>
<footer class="page-footer">
</footer>