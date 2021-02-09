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
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["course_data"]["tmp_name"], $target_file)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["course_data"]["name"])). " has been uploaded.";
      $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
      $sql = "insert into public.courses(course_name,owner_email,course_data)values('" . $_POST['course_name'] . "','" . $session_email . "','" . basename($_FILES["course_data"]["name"]) . "')";
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


<!-- 
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
  <h2>Login Here </h2>
  <form method="post" enctype="multipart/form-data">
  
     
    <div class="form-group">
      <label for="course">Course Name:</label>
      <input type="text" class="form-control" id="course_name" placeholder="Enter Course Name" name="course_name">
    </div>

    <div class="form-group">
      <label for="course">Data File:</label>
      <input type="file" class="form-control" id="course_data" placeholder="Insert Data File" name="course_data">
    </div>

    <input type="submit" name="submit2" class="btn btn-primary" value="Submit">

  </form>
</div>

<form method="post" action="../logic.php">
<input type="submit" class="btn btn-primary" name="logout" value="Logout">
</form>

</body>
</html>
 -->



<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
                  <label for="course">Course Name:</label>
                  <input type="text" class="form-control" id="course_name" placeholder="Enter Course Name" name="course_name">
                </div>

                <div class="form-group">
                  <label for="course">Data File:</label>
                  <input type="file" class="form-control" id="course_data" placeholder="Insert Data File" name="course_data">
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