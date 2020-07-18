<?php
session_start();
unset($_SESSION['login']);
session_destroy();

echo 
"<a
                href=\"login.php\">login</a>
                &nbsp;";
?>