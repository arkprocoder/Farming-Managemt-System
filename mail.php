<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require "mailer/src/PHPMailer.php";
require "mailer/src/OAuth.php";
require "mailer/src/SMTP.php";
require "mailer/src/POP3.php";
require "mailer/src/Exception.php";
$uemail = $_GET['useremail'];

$fname = $_GET['username'];

$secretkey = $_GET['token'];



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sammyhack90@gmail.com';                     // SMTP username
    $mail->Password   = '#@$#code121';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('pythonDemo4@gmail.com', 'Pixxy Walls');
    $mail->addAddress($uemail, $fname);     // Add a recipient
              // Name is optional
    $mail->addReplyTo('pythonDemo4@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Activate Your Pixxy Walls Account';
    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
<!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml><![endif]-->
<title>Christmas Email template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<meta name="format-detection" content="telephone=no">
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<!--<![endif]-->
<style type="text/css">
body {
    margin: 0 !important;
    padding: 0 !important;
    -webkit-text-size-adjust: 100% !important;
    -ms-text-size-adjust: 100% !important;
    -webkit-font-smoothing: antialiased !important;
}
img {
    border: 0 !important;
    outline: none !important;
}
p {
    Margin: 0px !important;
    Padding: 0px !important;
}
table {
    border-collapse: collapse;
    mso-table-lspace: 0px;
    mso-table-rspace: 0px;
}
td, a, span {
    border-collapse: collapse;
    mso-line-height-rule: exactly;
}
.ExternalClass * {
    line-height: 100%;
}
.em_defaultlink a {
    color: inherit !important;
    text-decoration: none !important;
}
span.MsoHyperlink {
    mso-style-priority: 99;
    color: inherit;
}
span.MsoHyperlinkFollowed {
    mso-style-priority: 99;
    color: inherit;
}
 @media only screen and (min-width:481px) and (max-width:699px) {
.em_main_table {
    width: 100% !important;
}
.em_wrapper {
    width: 100% !important;
}
.em_hide {
    display: none !important;
}
.em_img {
    width: 100% !important;
    height: auto !important;
}
.em_h20 {
    height: 20px !important;
}
.em_padd {
    padding: 20px 10px !important;
}
}
@media screen and (max-width: 480px) {
.em_main_table {
    width: 100% !important;
}
.em_wrapper {
    width: 100% !important;
}
.em_hide {
    display: none !important;
}
.em_img {
    width: 100% !important;
    height: auto !important;
}
.em_h20 {
    height: 20px !important;
}
.em_padd {
    padding: 20px 10px !important;
}
.em_text1 {
    font-size: 16px !important;
    line-height: 24px !important;
}
u + .em_body .em_full_wrap {
    width: 100% !important;
    width: 100vw !important;
}
}
</style>
</head>

<body class="em_body" style="margin:0px; padding:0px;" bgcolor="#efefef">
<table class="em_full_wrap" valign="top" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#efefef" align="center">
  <tbody><tr>
    <td valign="top" align="center"><table class="em_main_table" style="width:700px;" width="700" cellspacing="0" cellpadding="0" border="0" align="center">
        <!--Header section-->
        <tbody><tr>
          <td style="padding:15px;" class="em_padd" valign="top" bgcolor="#f6f7f8" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody>
            </tbody></table></td>
        </tr>
        <!--//Header section-->
        <!--Banner section-->
        <tr>
          <td valign="top" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody><tr>
                <td valign="top" align="center"><img class="em_img" alt="merry Christmas" style="display:block; font-family:Arial, sans-serif; font-size:30px; line-height:34px; color:#000000; max-width:700px;" src="https://i.imgur.com/siUH8tJ.jpg" width="700" border="0" height="345"></td>
              </tr>
            </tbody></table></td>
        </tr>
        <!--//Banner section-->
        <!--Content Text Section-->
                 <tr>
          <td style="padding:35px 70px 30px;" class="em_padd" valign="top" bgcolor="#0d1121" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody><tr>
                <td style="font-family:Open Sans, Arial, sans-serif; font-size:16px; line-height:30px; color:#ffffff;" valign="top" align="center">Hello ,'.$fname.'</td>
              </tr>
              <tr>
                <td style="font-size:0px; line-height:0px; height:15px;" height="15">&nbsp;</td>
<!--—this is space of 15px to separate two paragraphs ---->
              </tr>
              <tr>
                <td style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding-bottom:12px;" valign="top" align="center">Please Click on the link below we provide to activate your Account on Pixxy Walls</td>
              </tr>

<tr>
                <td style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; text-transform:uppercase; letter-spacing:2px; padding-bottom:12px;" valign="top" align="center"> <center><a href="https://192.168.0.105/dashboard/pexels/confirm.php?token='.$secretkey.'"><button  style="width:120px;height:40px;background-color:teal;border-radius:10px;font-size:16px;text-align:center;color:#fff;text-decoration;none;outline:none;">Activate Account</button></a></center></td>
              </tr>
            </tbody></table></td>
        </tr>

        <!--//Content Text Section-->
        <!--Footer Section-->
        <tr>
          <td style="padding:38px 30px;" class="em_padd" valign="top" bgcolor="#f6f7f8" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody><tr>
                <td style="padding-bottom:16px;" valign="top" align="center"><table cellspacing="0" cellpadding="0" border="0" align="center">
                </table></td>
              </tr>
              <tr>
                <td style="font-family:Open Sans, Arial, sans-serif; font-size:11px; line-height:18px; color:#999999;" valign="top" align="center"><a href="#" target="_blank" style="color:#999999; text-decoration:underline;"> | <a href="#" target="_blank" style="color:#999999; text-decoration:underline;">From Sumit(Developer)-Pixxy Walls</a><br>
                  © 2019 Pixxy Walls. All Rights Reserved.<br></td>
              </tr>
            </tbody></table></td>
        </tr>

      </tbody></table></td>
  </tr>
</tbody></table>
<div class="em_hide" style="white-space: nowrap; display: none; font-size:0px; line-height:0px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
</body></html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header('Location:login.php?message=Account Created! Check Your Email For Confirmation!');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
}
