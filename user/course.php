<?php include 'userinfo_user.php'; ?>
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
            <article style="height: 650px">
                <div class="main__container">
                    <div class="main__title">
                        <div class="main__greeting">
                            <!-- <h1>Course</h1> -->
                        </div>
                    </div>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Course Info:</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <form  method="post"> -->
                            <?php

                            $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
                            $sql = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.courses where course_id ='" . $_GET['course_id'] . "';")));

                            echo "
              <tr>
                <td>Course Name :</td>
                <td>" . $sql['course_name'] . "</td>
               </tr>
               <tr>
                <td>Course Id :</td>
                <td>" . $sql['course_id'] . "</td>
               </tr>
               <tr>
                <td>Owner Email :</td>
                <td>" . $sql['owner_email'] . "</td>
               </tr>
               <tr>
                <td>Start Date :</td>
                <td>" . $sql['start_date'] . "</td>
               </tr>
               <tr>
                <td>End Date :</td>
                <td>" . $sql['end_date'] . "</td>
               </tr>
               <tr>
                <td>Description :</td>
                <td>" . $sql['description'] . "</td>
               </tr>
               <tr>
                <td>Course Data :</td>
                <td><a href='../admin/uploads/" . $sql['course_data'] . "'>" . $sql['course_data'] . "</a></td>
               </tr>
               <tr>";
                            $sql2 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.enroll where course_id ='" . $_GET['course_id'] . "' AND emailaddress='".$_SESSION['EmailStudent']."';")));
                            $status = $sql2['completed'] === 'f';
                            if ($status) {
                                echo "<td><button id='" . $sql['course_id'] . "' value='" . $_SESSION['EmailStudent'] . "' class='btn btn-primary'>Completed</button></td>";
                                // echo "<td><form><input name='accept' type='submit' id='".$row['course_id']."' value='".$row['emailaddress']."'></td></form>";
                            } else
                                echo "<td>Already Completed</td>";
                            echo "</tr>";

                            pg_close($db);

                            ?>
                            <!-- </form> -->
                            <script src="../js/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $("button").click(function() {

                                        $.ajax({
                                            type: "POST",
                                            url: 'ajax.php',
                                            data: {
                                                action: 'call_this',
                                                course_id: $(this).attr('id'),
                                                emailaddress: $(this).attr('value'),
                                            },
                                            success: function(html) {
                                                location.reload();
                                            }

                                        });

                                    });
                                });
                            </script>

                        </tbody>
                    </table>
            </article>
        </section>
    </section>
</body>
<footer class="page-footer">
</footer>