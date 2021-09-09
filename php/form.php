<?php 

if (isset($_POST['submit'])){
   if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $header= "From: noreply@example.com". "\r\n";
      $header.= "Reply-to: noreply@example.com". "\r\n";
      $header.= "X-Mailer: PHP/". phpversion();
      $mail = mail($email,$name,$message,$header);
      if($mail){
         echo $name.$email.$message.$header;
      } else {
         echo "<p>error</p>";
      }
   } else {
      echo '<p>Something went wrong</p>';
  }
} else {
   echo '<p>Sodmething went wrong</p>';
}



 ?>