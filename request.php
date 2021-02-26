<?php
    $db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
    if($_POST['action'] == 'sync_cart') {
    //   pg_query(sprintf("UPDATE public.enroll SET completed = true WHERE course_id =". $_POST['course_id']." AND emailaddress='".$_POST['emailaddress']."' ;"));
    // echo "Done";
    // echo $_POST['cart'];
    echo '<script>console.log("Welcome to GeeksforGeeks!"); </script>'; 
    }

?>