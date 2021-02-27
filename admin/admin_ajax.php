<?php
$db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
if($_POST['action'] == 'add_certificate') {
  pg_query(sprintf("UPDATE public.enroll SET certificate_generated=TRUE, certificate='".$_POST['value']."' WHERE course_id =" . $_POST['course_id'] . " AND emailaddress='" . $_POST['emailaddress'] . "';"));
}

?>