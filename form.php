<?php
if (isset($_POST['submit'])) {
    $name = $_POST['fullName'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "rkarecha@brohkssteel.com";
    $headers = "From: My Website - ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
    echo "Mail Sent. Thank you, ".$name."! we will contact you shortly.";
    }
?>
