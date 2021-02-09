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

  <form method="post" action="../logic.php">
  
     
    <div class="form-group">
      <label for="selected_course">Available Courses:</label>
      <select name="selected_course" id="selected_course">
        <!-- Query 1 - Fetch Available courses(course_id) for perticular user from courses - enroll -->
        <!-- Query 2 - Fetch Course Name for above course name -->

       <!--  <option value="1">Database</option>
        <option value="4">Compiler</option>
        <option value="6">Algo</option> -->
         <? php
         // $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");  
         // $dd_res = pg_query($dbconn,"SELECT * FROM public.courses"); 
         // while($r=pg_fetch_row($dd_res))
         // { 
         //       echo "<option value='$r'> $r </option>";
         // }

  <?php
        $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres"); 
        $sql = pg_query(sprintf("SELECT * FROM public.courses where course_id NOT IN (SELECT course_id FROM public.enroll WHERE roll_no='".pg_escape_string($_SESSION['Roll_no'])."')")) ;       
        while ($row = pg_fetch_assoc($sql)) {
            echo '<option value="'.htmlspecialchars($row['course_id']).'">'.htmlspecialchars($row['course_name']).'</option>';
        }
        pg_close($db);
  ?>
          

        ?>
      </select>
    </div>

    <input type="submit" name="submit_enroll_courses" class="btn btn-primary" value="Submit">

  </form>
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
         
                  <tr>
                    <td></td>
                    <td><a href="../Courses.php"></a></td>
                 
             
              </tbody>
            </table>
          </div>
        </article>
    </section>
  </section>
</body>
<footer class="page-footer">
</footer>