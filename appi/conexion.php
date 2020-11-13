<?php
   $host='tecn0project.com';
   $user='tecnproj';
   $pass='polopagaelserver1234';
   $data='tecnproj_General';

   $conn = new mysqli($host,$user,$pass,$data);
   if($conn->connect_errno){
      echo "No se conecto";
   }
?>