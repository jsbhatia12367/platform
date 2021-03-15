<?php
include("userinfo_sub_admin.php");
ob_start();
?>

<?php

if (isset($_POST['submit2']) && !empty($_POST['submit2'])) {
  if (isset($_SESSION['Email'])) {
    $session_email = $_SESSION["Email"];
  } else {
    $session_email = "error value";
  }

  $target_dir = "../admin/uploads/";
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
        echo '<script>alert("Course Added Successfully")</script>';
        //echo "Data saved Successfully";
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
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <svg style="display:none;">
  </svg>
  <script type="text/javascript">
    function validateInputDate() {
      var startDate = new Date(document.getElementById('start_date').value);
      var endDate = new Date(document.getElementById('end_date').value);
        if (isNaN(startDate.getTime()) || isNaN(endDate.getTime())) {
        } else {
          if(startDate>endDate)
          {
            alert("Please ensure that the End Date is greater than or equal to the Start Date.");
            document.getElementById('start_date').value = '';
            document.getElementById('end_date').value = '';
          }
        }
    }

    function courseFileAlreadyExistCheck(id) {
      var files = document.getElementById(id).files;

      if (files.length > 0) {

        var formData = new FormData();
        formData.append("file", files[0]);
        formData.append("action", "checkcoursefilealreadyexist")
        var xhttp = new XMLHttpRequest()
        xhttp.open("POST", "sub_admin_ajax.php", true);

        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            if (response == 1) {
              alert("File Already Exist");
              document.getElementById(id).value = "";
            }
          }
        };

        // Send request with data
        xhttp.send(formData);

      } else {
        alert("Please select a file");
      }

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
              <h1>Add Courses</h1>
              <form method="post" enctype="multipart/form-data">
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
                      <td><input type="text" class="form-control" id="course_name" placeholder="Enter Course Name" name="course_name" required></td>
                    </tr>
                    <tr>
                      <td>Owner Email : </td>
                      <td>
                        <select class="form-control" id="owner_email" name="owner_email">
                          <?php
                          echo '<option value="' . htmlspecialchars($_SESSION['Email']) . '">' . htmlspecialchars($_SESSION['Email']) . '</option>';
                          ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Data File : </td>
                      <td><input type="file" class="form-control" id="course_data" placeholder="Insert Data File" name="course_data" required onchange='courseFileAlreadyExistCheck(this.id)'></td>
                    </tr>
                    <tr>
                      <td>Start Date : </td>
                      <td><input type="date" class="form-control" id="start_date" placeholder="dd/mm/yyyy" name="start_date" required onchange="validateInputDate()"></td>
                    </tr>
                    <tr>
                      <td>End Date : </td>
                      <td><input type="date" class="form-control" id="end_date" placeholder="dd/mm/yyyy" name="end_date" required onchange="validateInputDate()"></td>
                    </tr>
                    <tr>
                      <td>Description : </td>
                      <td><textarea rows="4" cols="50" name="description" class="form-control" id="description" placeholder="Enter Description" required></textarea></td>
                    </tr>
                    <tr>
                      <td>Capacity : </td>
                      <td><input type="number" class="form-control" id="capacity" placeholder="Enter Capacity" name="capacity" min="1" required></td>
                    </tr>
                    <td colspan="2">
                      <center><input type="submit" name="submit2" class="btn btn-primary" value="Submit"></center>
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