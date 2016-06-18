<?php
require ('Main.php');
require ('AdminHeader.inc');
@ $name = $_POST['name'];
@ $passWord = $_POST['passWord'];
$name = trim($name);
$passWord = trim($passWord);

session_start();

if(empty($name)||empty($passWord))
{
    echo 'Login or password are empty <p>';
    do_html_url('AdminLogin.php', 'go back to login page');
}
else if($name=='admin' && $passWord=='admin')
{
    // visitor's name and password combination are correct
    $_SESSION['valid_admin'] = $name;
    echo '<h1>Check here to check users.</h1>';
    do_html_url('admin.php', 'go to administrator for the conference page');
}
else
{
    // visitor's name and password combination are not correct
    echo 'Wrong login or password <p>';
    do_html_url('AdminLogin.php', 'go back to login page');
}

?>