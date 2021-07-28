<?php
setcookie('user', $user['namecheck'], time() - 3600, "/");
header('Location: http://localhost/Lab_16/');
