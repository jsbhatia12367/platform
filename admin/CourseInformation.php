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
              <h1>Course Information</h1>
              <table class="content-table">
            
           <thead>
              <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Course Data</th>
                <!--<th>Instructor Name</th>-->
                <!-- <th>Status</th> -->
              </tr>
            </thead>
            <tbody>
        
                <?php
                  $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                  $sql = pg_query(sprintf("SELECT * FROM public.courses;"));
                  while ($row = pg_fetch_assoc($sql)) {
                    echo "<tr>
                      <td>".htmlspecialchars($row['course_id'])."</td>
                      <td>". htmlspecialchars($row['course_name'])."</td>
                      <td><a href='../admin/uploads/". htmlspecialchars($row['course_data'])."'>". htmlspecialchars($row['course_data']) ."</a></td>
                  </tr>";
                  }
                ?>
                <!-- <td></td>
                <td></td>
                <td> -->
                  <!-- <div class="btn-group" data-toggle="buttons"><a href="#" target="_blank" class="btn btn-warning btn-xs"> Launch </a><a href="#" target="_blank" class="btn btn-danger btn-xs"> Stop </a><a href="#" target="_blank" class="btn btn-primary btn-xs"> Hold </a></div> -->
                <!-- </td> -->
  
            </tbody>
          </table>
    </article>
  <footer class="page-footer">
  </footer>
</section>
</body>