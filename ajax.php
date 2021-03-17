<?php

$string=exec('getmac');
$mac=substr($string, 0, 17); 
$db = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");

if ($_POST['action'] == 'add_to_cart') {
	//echo "<script type='text/javascript'>alert('Course Added In Cart');</script>";
  pg_query(sprintf("insert into public.cart(course_id,emailaddress) values(" . $_POST['course_id'] . ",'" . $mac . "');"));

}

if ($_POST['action'] == 'remove_from_cart') {
  pg_query(sprintf("DELETE FROM public.cart where emailaddress='" . $mac . "' AND course_id='".$_POST['course_id']."';"));
}

?>
