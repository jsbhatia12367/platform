<?php

$string=exec('getmac');
$mac=substr($string, 0, 17); 
$db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");

if ($_POST['action'] == 'add_to_cart') {
  pg_query(sprintf("insert into public.cart(course_id,emailaddress) values(" . $_POST['course_id'] . ",'" . $mac . "');"));
}

?>
