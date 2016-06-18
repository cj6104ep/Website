<?php

require_once('Main.php');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$verifyemail=$_POST['verifyemail'];
$jobtitle=$_POST['jobtitle'];
$department=$_POST['department'];
$organization=$_POST['organization'];
$workphone=$_POST['workphone'];
$homephone=$_POST['homephone'];
$fax=$_POST['fax'];
$date=$_POST['date'];
$specialneed=$_POST['specialneed'];

@   $breakfast=$_POST['breakfast'];
if(isset($breakfast))
    $breakfast="Yes-Breakfast";
else
    $breakfast="No-Breakfast";

@   $lunch=$_POST['lunch'];
if(isset($lunch))
    $lunch="Yes-Lunch";
else
    $lunch="No-Lunch";

@   $vegetarian=$_POST['vegetarian'];
if(isset($vegetarian))
    $vegetarian="Yes";
else
    $vegetarian="No";

@   $mnscu=$_POST['mnscu'];
if(isset($mnscu))
{
    if($mnscu == "mnscu")
        $mnscu="Yes";
    else
        $mnscu="No";
}
else
    $mnscu="";

$firstname = trim($firstname);
$lastname = trim($lastname);
$email = trim($email);
$verifyemail = trim($verifyemail);
$jobtitle = trim($jobtitle);
$department = trim($department);
$organization = trim($organization);
$workphone = trim($workphone);
$homephone = trim($homephone);
$fax = trim($fax);
$specialneed = trim($specialneed);
$fee = 0;
$date = trim($date);

require('Header.inc');

if ($email != $verifyemail)
{
    echo 'The emails you entered do not match - please go back'
        .' and try again.';
    exit;
}

$requiredFields['email'] = $email;
$requiredFields['firstname'] = $firstname;
$requiredFields['lastname'] = $lastname;
$requiredFields['jobtitle'] = $jobtitle;
$requiredFields['department'] = $department;
$requiredFields['organization'] = $organization;
$requiredFields['workphone'] = $workphone;
$requiredFields['mnscu'] = $mnscu;

echo '<p>';

if (!filled_out($requiredFields))
{
    echo 'You have not filled out all the required fields - please go back'
        .' and try again.';
    exit;
}

if (!valid_email($email))
{
    echo 'That is not a valid email address.  Please go back '
        .' and try again.';
    exit;
}

$reg_result = register($email, $firstname,
    $lastname, $jobtitle, $department, $organization,
    $workphone, $homephone, $fax, $breakfast,
    $lunch, $vegetarian, $specialneed, $fee,
    $mnscu, $date);

if ($reg_result === true)
{
    echo 'Your registration was successful.<br>'
        .'Thank you for the time and interested in the conference.';
    do_html_url('Index.php', 'Go to home page');
}
else
{
    echo 'Problem: ';
    echo $reg_result;
    exit;
}


?>