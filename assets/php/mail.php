<?php

$(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];
    $mailTo="arora1897@gmail.com";
    $headers="From: ".$mailFrom;
    $txt="You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    headers=("Location: contact.php?mailsend");
}

?>