<?php include 'userinfo_sub_admin.php'; ?>
<?php
$CourseId = $_GET['CourseId'];

$db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");

if (isset($_POST['update']) && !empty($_POST['update'])) {

    $sql = "update public.courses set 
    course_name = '" . $_POST['course_name'] . " ',
    start_date =' " . $_POST['start_date'] . "',
    end_date = '" . $_POST['end_date'] . "',
    description = '" . $_POST['description'] . "',
    capacity = '" . $_POST['capacity'] . " '
    where course_id = '" . $CourseId . "';";
    $ret = pg_query($sql);
    if ($ret) {
      echo '<script>alert("Course Updated Successfully")</script>';
    } else {
      echo "Something Went Wrong";
    }
}

if (isset($_POST['delete']) && !empty($_POST['delete'])) {
  $DeleteCourseSql = "DELETE FROM public.courses WHERE course_id = '".$CourseId."'";
  $ret = pg_query($db, $DeleteCourseSql);
  if($ret){
      echo '<script>alert("Course Deleted Successfully")</script>';
      header('Location: CourseInformation.php');
  }else{
          echo "Soething Went Wrong";
  }
}

pg_close($db);

?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <svg style="display:none;"></svg>
  <script>
    function showUpdateDataField() {
      document.getElementById('update_data_file').style.display = "";
      document.getElementById('current_data_file').style.display = "none";
    }
  </script>
</head>

<body>
  <header class="page-header">
    <?php include 'LeftMenu.php'; ?>

  </header>
  <section class="page-content">
    <section class="grid">
      <article style="height: 800px">
        <div class="main__container">
          <div class="main__title">
            <div class="main__greeting">
              <h1>Edit Course Details</h1>
              <form method="post" enctype="multipart/form-data">
                <table class="content-table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                    $sql = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.courses where course_id='" . $CourseId . "';")));

                    echo "<tr>
                              <td>Course Name : </td>
                              <td><input type='text' class='form-control' id='course_name' value='" . htmlspecialchars($sql['course_name']) . "' name='course_name' required></td>
                            </tr>
                            <tr>
                              <td>Owner Email : </td>
                              <td><p>". htmlspecialchars($sql['owner_email']) ."</p>
                            </tr>
                      <tr>
                        <td>Start Date : </td>
                        <td><input type='date' class='form-control' id='start_date' placeholder='dd/mm/yyyy' name='start_date' value = '" . htmlspecialchars($sql['start_date']) . "' required onchange='validateInputDate()'></td>
                      </tr>
                      <tr>
                        <td>End Date : </td>
                        <td><input type='date' class='form-control' id='end_date' placeholder='dd/mm/yyyy' name='end_date' value = '" . htmlspecialchars($sql['end_date']) . "' required onchange='validateInputDate()'></td>
                      </tr>
                      <tr>
                        <td>Description : </td>
                        <td><textarea rows='4' cols='50' name='description' class='form-control' id='description'  required>" . htmlspecialchars($sql['description']) . "</textarea></td>
                      </tr>
                      <tr>
                        <td>Capacity : </td>
                        <td><input type='number' class='form-control' id='capacity' value='" . htmlspecialchars($sql['capacity']) . "' name='capacity' min='1' required></td>
                      </tr>";
                    ?>
                    <!-- <input type="file" name="uploadfile" id="img" style='display:none;'/> -->
                    <!-- <td><input type='hidden' class='form-control' id='hidden_data' placeholder='dd/mm/yyyy' name='hidden_data' value = '" . htmlspecialchars($row['course_data']) . "' required onchange='validateInputDate()'></td> -->


                    <td>
                      <center><input type="submit" name="update" class="btn btn-primary" value="Update"></center>
                    </td>
                    <td>
                      <center><input type="submit" name="delete" class="btn btn-primary" value="Delete"></center>
                    </td>

                    </tr>
                  </tbody>
                </table>


              </form>
      </article>
      <footer class="page-footer">
      </footer>
    </section>
</body>
</head>

</html>