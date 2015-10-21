<?php 
if (!empty($_POST)):
  $to ="siriloof@gmail.com";
  $subject ="Website Message from ".$_POST['name'];
  $message =$_POST['message'];
  $headers ="From: ".$_POST['email'];
  mail($to, $subject, $message, $headers);
endif;

?>

