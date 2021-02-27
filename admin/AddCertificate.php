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
                                    $sql = pg_query(sprintf("SELECT * FROM public.enroll where completed=TRUE And certificate_generated=FALSE;"));
                                    while ($row = pg_fetch_assoc($sql)) {
                                        $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.courses where course_id='" . $row['course_id'] . "';")));
                                        echo "<tr>
                      <td>" . htmlspecialchars($row['emailaddress']) . "</td>
                      <td>" . htmlspecialchars($sql2['course_name']) . "</td>
                      <td><input type='file' id='" . $row['emailaddress'] . "' name='" . $row['course_id'] . "'  onchange='readFile(this.id,this.name,this.value)' ></td>
                  </tr>";
                                    }
                                    ?>
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                    <script>
                                        function readFile(email, course_id, value) {
                                            var fileInput = document.getElementById(email);
                                            var filename = fileInput.files[0].name;
                                            $.ajax({
                                                type: "POST",
                                                url: 'admin_ajax.php',
                                                data: {
                                                    action: 'add_certificate',
                                                    course_id: course_id,
                                                    emailaddress: email,
                                                    value: filename
                                                },
                                                success: function(html) {
                                                    location.reload();
                                                }

                                            });
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