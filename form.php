<?php
if($_POST["message"]) {
    mail("info.nyawainnresort@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>