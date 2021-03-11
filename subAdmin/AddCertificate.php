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
    <svg style="display:none;"></svg>
    <script type="text/javascript">
        function fileAlreadyExistCheck(){
            
            alert("File Already Exist or not check");
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
                            <h1>Add Certificate</h1>
                            <table class="content-table">

                                <thead>
                                    <tr>
                                        <th>Email Address</th>
                                        <th>Course Name</th>
                                        <th>Upload Certificate</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                                    $sql = pg_query(sprintf("SELECT * FROM public.enroll where completed=TRUE And certificate_generated=FALSE And course_id IN (SELECT course_id from courses where owner_email = '".$_SESSION['Email']."');"));
                                    $count = 0;
                                    while ($row = pg_fetch_assoc($sql)) {
                                        $count = $count + 1;
                                        $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.courses where course_id='" . $row['course_id'] . "';")));
                                        echo "<tr>
                      <td>" . htmlspecialchars($row['emailaddress']) . "</td>
                      <td>" . htmlspecialchars($sql2['course_name']) . "</td>
                     <td><input type='file' name='" . $row['course_id'] . $row['emailaddress'] . "' id='" . $row['course_id'] . $row['emailaddress'] . "' onchange='fileAlreadyExistCheck()'>
                     <input type='button' name='" . $row['emailaddress'] . "' id='" . $row['course_id'] . "' 
                        value='Upload' 
                        onclick='uploadFile(this.id,this.name);' ></td>
                  </tr>";
                                    }
                                    if($count == 0){
                                        echo "<tr><td></td><td>No Certificate to add</td><td></td></tr>";
                                    }
                                    ?>
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                    <script>
                                        function uploadFile(course_id, email) {

                                            var files = document.getElementById(course_id + email).files;

                                            if (files.length > 0) {

                                                var formData = new FormData();
                                                formData.append("file", files[0]);
                                                formData.append("course_id", course_id);
                                                formData.append("emailaddress", email);

                                                var xhttp = new XMLHttpRequest();

                                                // Set POST method and ajax file path
                                                xhttp.open("POST", "sub_admin_ajax.php", true);

                                                // call on request changes state
                                                xhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {

                                                        var response = this.responseText;
                                                        if (response == 1) {
                                                            alert("Upload successfully.");
                                                            location.reload();
                                                        } else {
                                                            alert("File not uploaded.");
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