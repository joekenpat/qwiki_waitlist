<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();
$dotenv->required(['MAIL_HOST', 'MAIL_PORT', 'MAIL_USERNAME', 'MAIL_PASSWORD', 'FROM_EMAIL', 'FROM_NAME']);

function SendWelcomeMail($from, $to, $subject = "Welcome to Qwiki!")
{
  //Create an instance; passing `true` enables exception
  try {
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->Host = $_ENV["MAIL_HOST"];
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV["MAIL_USERNAME"];
    $mail->Password = $_ENV["MAIL_PASSWORD"];
    $mail->SMTPSecure = 'tls';
    $mail->Port = $_ENV["MAIL_PORT"];
    // $mail->SMTPDebug = 3;
    $mail->setFrom($_ENV["FROM_EMAIL"], $_ENV["FROM_NAME"]);
    $mail->addAddress($to["email"], $to["name"]);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $user_name  = urlencode($to["name"]);
    $mail->msgHTML(
      file_get_contents(
        ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://')
          . $_SERVER['HTTP_HOST']
          . dirname($_SERVER['PHP_SELF'])
          . "/welcome_mail_template.php?user_name={$user_name}"
      ),
      __DIR__
    );
    $mail->send();
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode(["status" => "success", "message" => "Mail Sent"]);
  } catch (Exception $e) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Mailer Error: {$mail->ErrorInfo}"]);
  }
}
