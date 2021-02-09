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
    <?php include 'LeftMenu.php';?>
    
  </header>
  <section class="page-content">
    <section class ="grid">
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
                </tr>
              </thead>
              <tbody>
             

                    <?php
        $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres"); 
         $sql = pg_query(sprintf("SELECT * FROM public.courses where course_id IN (SELECT course_id FROM public.enroll where roll_no='".pg_escape_string($_SESSION['Roll_no'])."');"));
         $sr_no =1;
                   
        while ($row = pg_fetch_assoc($sql)) {
         
                   
                     echo"<tr>";

                    echo"<td>$sr_no</td>";
                   echo"<td><a href='../Courses.php'></a> ".htmlspecialchars($row['course_name'])." </td>";
                 
                  echo"</tr>";
                   $sr_no++;
                 }
           // <!--  echo '<option value="'.htmlspecialchars($row['course_id']).'">'.htmlspecialchars($row['course_name']).'</option>'; -->
        
         pg_close($db); ?>
  
                 
                          
            
              </tbody>
            </table>
          </div>
        </article>
    </section>
  </section>
</body>
<footer class="page-footer">
</footer>