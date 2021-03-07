<?php
include("userinfo_admin.php");
ob_start();
?>

<?php

if (isset($_POST['submit2']) && !empty($_POST['submit2'])) {
  if (isset($_SESSION['Email'])) {
    $session_email = $_SESSION["Email"];
  } else {
    $session_email = "error value";
  }

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["course_data"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["course_data"]["tmp_name"], $target_file)) {
      $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
      $sql = "insert into public.courses(course_name,owner_email,course_data,start_date,end_date,description,capacity)values('" . $_POST['course_name'] . "','"  . $_POST['owner_email'] .  "','" . basename($_FILES["course_data"]["name"]) . "','" . $_POST['start_date'] . "','" . $_POST['end_date'] . "','" . $_POST['description'] . "','" . $_POST['capacity'] . "')";
      $ret = pg_query($dbconn, $sql);
      if ($ret) {
        echo "Data saved Successfully";
      } else {

        echo "Something Went Wrong";
      }
      pg_close($dbconn);
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}

?>

<!DOCTYPE html>
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
              <h1>Add Courses</h1>
              <form  method="post" enctype="multipart/form-data">
              <table class="content-table">
            <thead>
              <tr>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Course Name : </td>
                <td><input type="text" class="form-control" id="course_name" placeholder="Enter Course Name" name="course_name"></td>
              </tr>
              <tr>
                <td>Owner Email : </td>
                <td>
                  <select class="form-control" id="owner_email" name="owner_email">
                  <?php
                  $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                  $sql = pg_query(sprintf("SELECT * FROM public.sub_admin "));
                  while ($row = pg_fetch_assoc($sql)) {
                    echo '<option value="' . htmlspecialchars($row['email']) . '">' . htmlspecialchars($row['email']) . '</option>';
                  }
                  pg_close($db);
                  ?>
                  </select>
                </td>
              </tr>
              <tr>
              <tr>
                <td>Data File : </td>
                <td><input type="file" class="form-control" id="course_data" placeholder="Insert Data File" name="course_data"></td>
              </tr>
              <tr>
                <td>Start Date : </td>
                <td><input type="date" class="form-control" id="start_date" placeholder="dd/mm/yyyy" name="start_date"></td>
              </tr>
              <tr>
                <td>End Date : </td>
                <td><input type="date" class="form-control" id="end_date" placeholder="dd/mm/yyyy" name="end_date"></td>
              </tr>
              <tr>
                <td>Description : </td>
                <td><textarea rows="4" cols="50" name="description" class="form-control" id="description" placeholder="Enter Description"></textarea></td>
              </tr>
              <tr>
                <td>Capacity : </td>
                <td><input type="number" class="form-control" id="capacity" placeholder="Enter Capacity" name="capacity"></td>
              </tr>
                <td colspan="2"><center><input type="submit" name="submit2" class="btn btn-primary" value="Submit"></center></td>
                
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