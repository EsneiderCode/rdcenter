<?php
ob_start(); // Start output buffering

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'info@rdcenter.ru';
    $subject = 'Новое сообщение от контактной формы';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $email_body = "Вы получили новое сообщение от контактной формы.\n\n" .
                  "Имя: $name\n" .
                  "Email: $email\n" .
                  "Сообщение: $message\n";
    
    if(mail($to, $subject, $email_body, $headers)) {
        ob_end_clean(); // Clear output buffer
        header("Location: index.php?modal=success"); // Redirect to the main page with a success parameter
        exit(); // Stop further script execution
    } else {
        echo "Произошла ошибка при отправке сообщения.";
    }
}

ob_end_flush(); // Flush output buffer
?>