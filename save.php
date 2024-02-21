<?php

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['subject'])){
    $fname = ($_POST['name']);
    $mobile = ($_POST['phone']);
    $email = ($_POST['email']);
    $message = ($_POST['subject']);

    $html = "<table><tr><td>Name</td><td>$fname</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Message</td><td>$message</td></tr></table>";

    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "dehradunplots82@gmail.com";
    $mail->Password = "keep catk xyyh fvbl";
    $mail->SetFrom("dehradunplots82@gmail.com");
    $mail->addAddress("dehradunplots82@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "New Enquiry";
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    
    if($mail->send()){
         echo "Thankyou for connecting with us";
  }else{
      echo"Message Error";
  }

}

?>