<?php

$name_error = $email_error = $issue_error = $message_error = '';
$name = $email = $issue = $message = $success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $name_error = 'Introduzca un nombre';
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = 'Introduzca sólo letras y espacios.';
        }
    }

    if (empty($_POST['email'])) {
        $email_error = 'Introduzca un mail.';
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = 'El formato de mail es inválido.';
        }
    }

    if (empty($_POST['issue'])) {
        $issue_error = 'Introduzca un asunto';
    } else {
        $issue = test_input($_POST['issue']);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $issue)) {
            $issue_error = 'Sólo se admiten espacios, letras y números.';
        }
    }

    if (empty($_POST['message'])) {
        $message_error = 'Introduzca su mensaje';
    } else {
        $message = test_input($_POST['message']);
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $message)) {
            $message_error = 'Sólo se admiten espacios, letras y números.';
        }
    }

    if ($name_error == '' && $email_error == '' && $issue_error == '' && $message_error == '') {
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $message_body .= "$key: $value\n";
        }

        $to = 'patriciomcallister4ae@gmail.com';
        $subject = $issue;
        if (mail($to, $subject, $message)) {
            $success = 'Muchas gracias por contactarnos. Su mensaje será respondido a la brevedad.';
            $name = $email = $issue = $message = '';
        }
    }    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>