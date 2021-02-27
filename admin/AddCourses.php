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
<html lang="en-CA" class="no-js">

<head>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/add_courses.css' rel='stylesheet' type="text/css" />
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
      <article style="margin:100px;">
        <div class="main__container">
          <div class="main__title">
            <div class="main__greeting">

              <form method="post" enctype="multipart/form-data">


                <div class="form-group">
                  <label for="course_name">Course Name:</label>
                  <input type="text" class="form-control" id="course_name" placeholder="Enter Course Name" name="course_name">
                </div>

                <div class="form-group">
                  <label for="owner_email">Owner Email:</label>
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
                </div>

                <div class="form-group">
                  <label for="course_data">Data File:</label>
                  <input type="file" class="form-control" id="course_data" placeholder="Insert Data File" name="course_data">
                </div>

                <div class="form-group">
                  <label for="start_date">Start Date:</label>
                  <input type="date" class="form-control" id="start_date" placeholder="dd/mm/yyyy" name="start_date">
                </div>

                <div class="form-group">
                  <label for="end_date">End Date:</label>
                  <input type="date" class="form-control" id="end_date" placeholder="dd/mm/yyyy" name="end_date">
                </div>

                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea rows="4" cols="50" name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
                </div>

                <div class="form-group">
                  <label for="capacity">Capacity:</label>
                  <input type="number" class="form-control" id="capacity" placeholder="Enter Capacity" name="capacity">
                </div>


                <br><br>
                <div class="form-group">
                  <input type="submit" name="submit2" class="btn btn-primary" value="Submit">
                </div>

              </form>

            </div>
          </div>
        </div>
      </article>
    </section>
  </section>
  <footer class="page-footer">
  </footer>
</body>

</html>