<?php 
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

if (isset($_POST['submit'])){
   if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $file = $_FILES['attachment']['name'];
      $tmp_file = $_FILES['attachment']['tmp_name'];
      $header= "From: EmpreApp+noreply@empreapp.com". "\r\n";
      $header.= "Reply-to: noreply@example.com". "\r\n";
      $header.= "X-Mailer: PHP/". phpversion();
      $empremail = "hola@empreapp.com";
      
      $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();                                        
            $mail->Host       = 'p3plzcpnl485516.prod.phx3.secureserver.net';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'noreply@empreapp.com';
            $mail->Password   = 'Q4Wud}]wBG6b';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('noreply@empreapp.com', 'EmpreApp');
            $mail->addAddress($empremail, $name);     //Add a recipient
            
            $mail->addReplyTo('noreply@empreapp.com', 'EmpreApp');
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Formulario de contacto - ". $name;
            $mail->Body    = "<h2>Formulario de contacto</h2> \r\n <br> Este mensaje fue enviado por: <strong>". $email. "</strong>\r\n\n <br><br><p style='inline-size: 80%;text-align: justify;overflow-wrap: break-word;'>" .$message ."</p>";
            if(!empty($file)){
                $mail->AddAttachment($tmp_file, $file);
            }
            
            
            $mail->send();
            echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');window.location.replace('http://empreapp.com');</script>";
        } catch (Exception $e) {
           echo "<script>alert('Error al enviar el formulario');window.location.replace('http://empreapp.com');;</script>";
        }
           } else {
              echo '<p>Something went wrong</p>';
          }
        } else {
           echo "<script>window.location.replace('http://empreapp.com');</script>";
        }
