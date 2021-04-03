<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <script>
        function DeleteData(course_id,data) {
            $.ajax({
                type: "POST",
                url: 'sub_admin_ajax.php',
                data: {
                    action: 'delete_course_data',
                    course_id: course_id,
                    data: data
                },
                success: function(html) {
                    location.reload();
                }

            });
        }
    </script>
</head>

<body>
    <div class="container">
        <?php

        $course_id = $_GET['course_id'];

        $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
        $sql = pg_query(sprintf("SELECT * FROM public.course_specific_data where course_id=$course_id;"));
        $count = 0;
        while ($row = pg_fetch_assoc($sql)) {
            $count = $count + 1;
            echo "<div class='row'>
                        <div class='col'>
                            <p>" . htmlspecialchars($row['course_data']) . "</p>
                        </div>
                    <div class='col'>
                        <button class='btn btn-primary' name=" . $row['course_data'] . " id='".$row['course_id']."' onclick='DeleteData(this.id,this.name)'>Delete</button>
                    </div>
                </div>";
        }

        if($count == 0){
            echo "<p>No Data Available</p>";
        }
        ?>

    </div>
</body>

</html>