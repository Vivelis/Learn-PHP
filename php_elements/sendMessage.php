<?php
// Don't work in localhost
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    $myMail = "dognilurda@vusra.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from {$name}.\n\n{$message}";
    mail($myMail, $subject, $message2, $header);
    header("Location: /Learn-PHP/pages/contact.php?mailsend");
}
?>
