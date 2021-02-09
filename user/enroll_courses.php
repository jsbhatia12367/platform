<?php
include("userinfo_user.php");
ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Enroll Courses</h2>

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
         $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");  
         $dd_res = pg_query($dbconn,"SELECT * FROM public.courses"); 
         // while($r=pg_fetch_row($dd_res))
         // { 
         //       echo "<option value='$r'> $r </option>";
         // }
          while ($row = pg_fetch_assoc($dd_res)) {
                echo $row['course_id'];
                echo "Kavish";
             }

        ?>
      </select>
    </div>

    <input type="submit" name="submit_enroll_courses" class="btn btn-primary" value="Submit">

  </form>
</div>

</body>
</html>

