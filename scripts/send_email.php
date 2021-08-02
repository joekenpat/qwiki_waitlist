<?php

require("./MailMan.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $errors = array();
  if (!preg_match("/^[a-zA-Z ]*$/", $_POST['signup_name'])) {
    $errors["signup_name"] = "Invalid First Name";
  }
  $_POST['signup_email'] = preg_replace('/\s+/', '', $_POST['signup_email']);
  if (!filter_var($_POST['signup_email'], FILTER_VALIDATE_EMAIL) === 0) {
    $errors['signup_name'] = "Invalid Email Address";
  }
  if (count($errors) === 0) {
    $signup_name = filter_var($_POST['signup_name'], FILTER_SANITIZE_STRING);
    $signup_email = filter_var($_POST['signup_email'], FILTER_SANITIZE_EMAIL);
    $to = ["email" => $signup_email, "name" => $signup_name];
    $from = ["email" => $signup_email, "name" => $signup_name];
    SendWelcomeMail($from, $to);
  }
} else {
  http_response_code(405);
  header('Content-Type: application/json');
  echo json_encode(['status' => "error", "message" => "Request Method Not Allowed, Allowed Methods: [POST]"]);
}
