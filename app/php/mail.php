<?php

//Script Foreach
$project_name = trim($_POST["project_name"]);
$admin_email = trim($_POST["admin_email"]);
$form_subject = trim($_POST["form_subject"]);

foreach ($_POST as $key => $value) {
    if ($value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject") {
        $message .= " $key: $value \r\n";
    }
}



$headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: ' . $project_name . ' <' . $admin_email . '>' . PHP_EOL .
    'Reply-To: ' . $admin_email . '' . PHP_EOL;

mail($admin_email,$form_subject, $message, $headers);
