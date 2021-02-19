<?php
if($_POST["message"]) {
    mail("raquelicruz94@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
