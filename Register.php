<?php
//Connection to Database
require_once ('Connection.php');

function delete_user($email)
{
    if (!($conn = db_connect()))
        return false;

    $result = mysql_query(
        "select * from user where email='$email'");

    if (!$result)
        return false;

    if (!mysql_query( "delete from user
                       where email='$email'"))
        return false;

    $row = mysql_fetch_array($result);
    $lastname = stripslashes($row['lastname']);
    return $lastname;
}

function register( $id,$firstname, $lastname, $email,
                  $username, $password){
    $id = NULL;
    $firstname = addslashes($firstname);
    $lastname = addslashes($lastname);
    $email = addslashes($email);
    $username = addslashes($username);
    $password = addslashes($password);

$conn = db_connect();

 if (!$conn)
    return 'Could not connect to database '.
    'server - please try later.';

 //check if email is unique
$result = mysql_query(
   "select * from 'user' where email='$email'");

if (!$result)
    return 'Could not execute query';

if (mysql_num_rows($result)>0)
   return 'That email is taken - '.
   'go back and choose another one.';

$result = mysql_query("INSERT INTO 'user' VALUES ('$id','$firstname','$lastname','$email','$username','$password')");

if (!$result)
    return 'Could not register you  in database '.
  '- please try again later.';

return true;
}