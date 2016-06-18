<?php

session_start();
require ('Main.php');
require ('AdminHeader.inc');

if(isset($_SESSION['valid_admin']))
{
    echo '<p>You are logged in as '.$_SESSION['valid_admin'];
}
else
{
    echo '<p>You are not logged in.';
    echo '<p>Only logged in members can see this page.';
    do_html_url('Index.php', 'Home');
    exit;
}
$color = "#cccccc";

echo '<br />';
echo '<form name = user_table action = "DeleteUsers.php" method = post>';
echo '<table width = 760 cellpadding = 2 cellspacing = 0>';
echo "<tr bgcolor = $color><td><strong>LastName</strong></td>";
echo "<td><strong>FirstName</strong></td>";
echo "<td><strong>JobTitle</strong></td>";
echo "<td><strong>MnSCU faculty</strong></td>";
echo "<td><strong>Date</strong></td>";
echo "<td><strong>Delete?</strong></td></tr>";

$conn = db_connect();
$query = "select * from user";
$result = mysql_query($query);
@ $num_results = mysql_num_rows($result);

if($num_results < 1)
{
    echo "<tr><td>No user on record</td></tr>";
}
else
{
    for($i = 0; $i < $num_results; $i++)
    {
        if($color == "#cccccc")
            $color = "#ffffff";
        else
            $color = "#cccccc";

        $row = mysql_fetch_array($result);
        $email = stripslashes($row['email']);
        $lastname = htmlspecialchars(stripslashes($row['lastname']));
        $firstname = htmlspecialchars(stripslashes($row['firstname']));
        $jobtitle = htmlspecialchars(stripslashes($row['jobtitle']));
        $mnscu = htmlspecialchars(stripslashes($row['mnscu']));
        $date = stripslashes($row['date']);

        echo "<tr bgcolor = $color><td><a href = ShowUsers.php?email=$email>"
            .$lastname."</a></td>";
        echo "<td>".$firstname."</td>";
        echo "<td>".$jobtitle."</td>";
        echo "<td>".$mnscu."</td>";
        echo "<td>".$date."</td>";
        echo "<td><input type=checkbox name=del_me[] value='$email'></td></tr>";
    }
}

echo '</table><p><center>'.
    '<input type=submit value=deleteSelected>'.
    '</center></form>';

$orders['Index.php'] = "Home";
$orders['AdminLogout.php'] = "Admin Logout";
display_menu($orders);
?>