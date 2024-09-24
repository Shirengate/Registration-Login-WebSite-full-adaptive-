<?php
  $say = htmlspecialchars($_POST['emailReg']);
  $to  = htmlspecialchars($_POST['passReg']);

  echo  'email' , $emailReg, ' ',  'password', $passReg;
?>