<?php
require ('AdminHeader.inc');
?>
<h1>Please Log In</h1>
<body>
<form method="post" action="AdminAcccount.php">
    <table border="0">
        <tr>
            <th> Username </th>
            <td> <input type="text" name="name"> </td>
        </tr>
        <tr>
            <th> Password </th>
            <td> <input type="password" name="passWord"> </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Log In">
            </td>
        </tr>
    </table>
</form>
</body>

<?php
require ('Footer.inc');
?>
