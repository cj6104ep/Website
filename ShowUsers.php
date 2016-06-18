<?php
require_once('Main.php');
session_start();
require('AdminHeader.inc');

echo '<hr>';

if(isset($_SESSION['valid_admin']))
{
    echo '<p>You are logged in as '.
        $_SESSION['valid_admin'].'<p>';
}
else
{
    echo '<p>You are not logged in.';
    echo '<p>Only logged in members can see this page.';
    do_html_url('index.php', 'Home');
    exit;
}

$email = $_REQUEST['email'];

if (!($conn = db_connect()))
    echo 'Cannot connect to database <b />';

$result = mysql_query(
    "select * from user where email='$email'");

if ($result)
{
    $row = mysql_fetch_array($result);

    $lastname = stripslashes($row['lastname']);
    $firstname = stripslashes($row['firstname']);
    $jobtitle = stripslashes($row['jobtitle']);
    $department = stripslashes($row['department']);
    $organization = stripslashes($row['organization']);
    $workphone = stripslashes($row['workphone']);
    $homephone = stripslashes($row['homephone']);
    $fax = stripslashes($row['fax']);
    $breakfast = stripslashes($row['breakfast']);
    $lunch = stripslashes($row['lunch']);
    $vegetarian = stripslashes($row['vegetarian']);
    $specialneed = stripslashes($row['specialneed']);
    $fee = stripslashes($row['fee']);
    $mnscu = stripslashes($row['mnscu']);
    $date = stripslashes($row['date']);
    $username = $firstname.' '.$lastname;

    echo '<h3>The following is the data information for '.
        $username.'</h3><p>';
    echo '<b>JobTitle: </b>'.$jobtitle.'<p>';
    echo '<b>Department: </b>'.$department.'<p>';
    echo '<b>Organization: </b>'.$organization.'<p>';
    echo '<b>WorkPhone: </b>'.$workphone.'<p>';
    echo '<b>HomePhone: </b>'.$homephone.'<p>';
    echo '<b>Fax: </b>'.$fax.'<p>';
    echo '<b>Breakfast: </b>'.$breakfast.'<p>';
    echo '<b>Lunch: </b>'.$lunch.'<p>';
    echo '<b>Vegetarian: </b>'.$vegetarian.'<p>';
    echo '<b>Special or other needs: </b>'.$specialneed.'<p>';

    echo '<form name = feedata action = "processfee.php" method = post>';
    echo '<table width = 100% cellpadding = 0 cellspacing = 0>';
    echo "<tr><td><b>Registration Fee Paid: </b>".$fee."</td>";
    echo "<td>Enter new amount:<input type=text name=fee size=20 maxlength=20>";
    echo '<input type=submit value=UpdateFee></td></tr>';
    echo '</table>';
    echo "<input type=hidden name=email value='$email'></form>";

    echo '<b>MnSCU faculty: </b>'.$mnscu.'<p>';
    echo '<b>Registration Date: </b>'.$date.'<p>';

    echo '<b>Send an email to this user: </b>'.
        '<a href = mailto:'.$email.'>'.$email.
        '</a>';
    echo '<p><p>';
}
else
{
    echo 'Database query failed';
}

do_html_url('admin.php', 'go to the administrator page');
echo '<p>';
$orders['Index.php'] = "Home";
$orders['AdminLogout.php'] = "Admin Logout";
display_menu($orders);

?>