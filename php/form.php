<?php 

if (isset($_POST['submit'])){
   if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $header= "From: noreply@example.com". "\r\n";
      $header.= "Reply-to: noreply@example.com". "\r\n";
      $header.= "X-Mailer: PHP/". phpversion();
      $mail = mail($email,$name,$message,$header)
      if($mail){
         echo "<h4>Prueba</h4>"
      }
   }
}

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
   
    $expensions= array("jpeg","jpg","png");
   
    if(in_array($file_ext,$expensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
   
    if($file_size > 2097152) {
       $errors[]='File size must be excately 2 MB';
    }
   
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"images/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
 }

 ?>