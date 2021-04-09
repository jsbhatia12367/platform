<?php
include("userinfo_sub_admin.php");
ob_start();
?>

<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="../js/jquery-3.6.0.min.js"></script>
  <svg style="display:none;"></svg>
  <script>
    function delete_course_data(id) {
      x_iframe = document.getElementById('iframe');
      x_iframe.src = "DeleteCourseData.php?course_id=" + id;
      x_iframe.style = "visibility: visible;"
    }

    // function SaveData(course_id, value) {
    //   $.ajax({
    //     type: "POST",
    //     url: 'admin_ajax.php',
    //     data: {
    //       action: 'add_course_data',
    //       course_id: course_id,
    //       course_data: value
    //     },
    //     success: function(response) {
    //       alert(response);
    //       location.reload();
    //     }

    //   });

    // }

    function SaveData(course_id) {

      var totalfiles = document.getElementById(course_id).files.length;

      if (totalfiles > 0) {

        var formData = new FormData();
        formData.append("action", "add_course_data");
        formData.append("course_id", course_id);


        // Read selected files
        for (var index = 0; index < totalfiles; index++) {
          formData.append("files[]", document.getElementById(course_id).files[index]);
        }

        var xhttp = new XMLHttpRequest();

        xhttp.open("POST", "sub_admin_ajax.php", true);


        // call on request changes state
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {

            alert("Course Data Upload successfully.");
            location.reload();

          }
        };

        // Send request with data
        xhttp.send(formData);

      } else {
        alert("Please select a file");
      }
    }

    $(document).ready(function() {
      $(".popup").hide();
      $(".openpop").click(function(e) {
        e.preventDefault();
        $("iframe").attr("src", $(this).attr('href'));
        $(".links").fadeOut('slow');
        $(".popup").fadeIn('slow');
      });

      $(".close").click(function() {
        $(this).parent().fadeOut("slow");
        $(".links").fadeIn("slow");
      });
    });
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
              <h1>Course Information</h1>
              <div class="wrapper">
                <div class="popup">
                  <iframe id="iframe" src="#" height="200" width="300" title="Delete Course Data"></iframe>
                  <a href="#" class="close">X</a>
                </div>
              </div>
              <table class="content-table">

                <thead>
                  <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Owner Email</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Currently Enrolled</th>
                    <th>Capacity</th>
                    <th>Edit Information</th>
                    <th>Add Data</th>
                    <th>Delete Data</th>

                  </tr>
                </thead>
                <tbody>

                  <?php
                  $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                  $sql = pg_query(sprintf("SELECT * FROM public.courses where owner_email='" . $_SESSION['EmailSubAdmin'] . "';"));
                  $count = 0;
                  while ($row = pg_fetch_assoc($sql)) {
                    $count = $count + 1;
                    echo "<tr>
                    <td>" . htmlspecialchars($row['course_id']) . "</td>
                    <td>" . htmlspecialchars($row['course_name']) . "</td>
                    <td>" . htmlspecialchars($row['owner_email']) . "</td>
                    <td>" . htmlspecialchars($row['start_date']) . "</td>
                    <td>" . htmlspecialchars($row['end_date']) . "</td>
                    <td>" . htmlspecialchars($row['currently_enrolled']) . "</td>
                    <td>" . htmlspecialchars($row['capacity']) . "</td>
                    <td><a href='EditMyCourse.php?CourseId=" . htmlspecialchars($row['course_id']) . "'>Edit</a></td>
                    <td><input name='upload[]' multiple='multiple' id='" . $row['course_id'] . "' type='file' onchange='SaveData(this.id)'/></td>
                    <td><a class='openpop' href='DeleteCourseData.php?course_id=" . $row['course_id'] . "'>Delete</a></td>
                    
                </tr>";
                  }
                  if ($count == 0) {
                    echo "<tr><td colspan='8'><center>No Course Information Available</center></td></tr>";
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