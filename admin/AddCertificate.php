<?php
if (isset($_POST['submit']) && !empty($_POST['submit'])) {

    $target_dir = "certificates/";
    $target_file = $target_dir . basename($_FILES["certificate"]["name"]);
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
        if (move_uploaded_file($_FILES["certificate"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["course_data"]["name"])). " has been uploaded.";
            $dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
            $sql = "UPDATE public.enroll SET certificate='" . $_FILES['certificate']['name'] . "' WHERE course_id =" . $_POST['course_id'] . " AND emailaddress='" . $_POST['emailaddress'] . "';";
            $ret = pg_query($dbconn, $sql);
            if ($ret) {
                echo "Data saved Successfully";
                $sql2 = "UPDATE public.enroll SET certificate_generated=true WHERE course_id =" . $_POST['course_id'] . " AND emailaddress='" . $_POST['emailaddress'] . "';";
                pg_query($dbconn, $sql2);
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
    <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
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
                                    <label for="emailaddress">Email Address:</label>
                                    <select onchange="OnSelectionChange()" name="emailaddress" id="emailaddress">
                                        <?php
                                        $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                                        $sql = pg_query(sprintf("SELECT DISTINCT emailaddress FROM public.cmhauser"));
                                        while ($row = pg_fetch_assoc($sql)) {
                                            echo '<option value="' . htmlspecialchars($row['emailaddress']) . '">' . htmlspecialchars($row['emailaddress']) . '</option>';
                                        }
                                        pg_close($db);
                                        ?>
                                    </select>

                                </div>

                                <!-- <div class="form-group"> -->
                                <label for="course_id">Course Name:</label>
                                <select name="course_id" id="course_id">
                                    <?php
                                    $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                                    $sql2 = pg_query(sprintf("SELECT DISTINCT course_id FROM public.courses;"));
                                    while ($row = pg_fetch_assoc($sql2)) {
                                        echo '<option value="' . htmlspecialchars($row['course_id']) . '">' . htmlspecialchars($row['course_id']) . '</option>';
                                    }
                                    pg_close($db);
                                    ?>
                                </select>
                                <!-- </div> -->

                                <div class="form-group">
                                    <label for="course">Certificate:</label>
                                    <input type="file" class="form-control" id="certificate" placeholder="Insert Certificate" name="certificate">
                                </div>

                                <br><br>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
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