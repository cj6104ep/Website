<?php
session_start();
require('Main.php');
@ $old_user = $_SESSION['valid_admin'];
unset($_SESSION['valid_admin']);
session_destroy();
require('AdminHeader.inc');

if(!empty($old_user))
{
    echo 'You have been logged out. <p>';
}
else
{
    echo 'You were not logged in. <p>';
}

do_html_url('Index.php', 'Home');
?>