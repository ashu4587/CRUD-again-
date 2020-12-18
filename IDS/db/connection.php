<?php
  $con = mysqli_connect('localhost','root','','ids');
  $msg = "Connection Success";
  if($con == false){
    echo mysqli_connect_error();
    $msg = "Error Connection";
  }

  function debug($args){
    echo "<pre>";
      print_r($args);
    echo "</pre>";
  }

?>
