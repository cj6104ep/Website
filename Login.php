<html>
<head>
    <link href="Layout.css" rel="stylesheet" type="text/css">
    <link href="Menu.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="Holder">
    <div id="Header"></div>
    <div id="NavBar">
        <nav>
            <ul>
                <li><a href= Index.php>Home</a></li>
                <li><a href= Facilites.php>Facilites</a></li>
                <li><a href= Login.php>Login</a></li>
                <li><a href= forms.php>Register</a></li>
                <li><a href= "AdminLogin.php">Admin</a></li>
            </ul>
        </nav>
    </div>
    <div id="Content"></div>
    <div id="PageHeading"></div>
    <h1>Login </h1>
    <div id="ContentLeft"></div>
    <h2>Enter User Information </h2><br/>
    <br />
    <div id="ContentRight">
        <form method=post action="successful.php">
      <table width="400" border="0" align="center">
        <tr>
          <td><h6><span id="sprytextfield">
            <label for="UserName"></label>
            UserName:<br/>
            <br/>
            <input name="UserName" type="text" class="Style_text_field" id="UserName"/>
          </span></h6>
            <span><span class="textfieldRequireedMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><h6><span id="sprypassword1">
            <label for="Password"></label>
            Password:<br/>
            <br/>
            <input name="Password" type="password" class="Style_text_field" id="Password"/>
          </span></h6>
            <span><span class="textfieldRequireedMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><input type="submit" name="LoginButton" id="LoginButton" value="Login" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
            </form>
    </div>
<?php
require ('Footer.inc');
?>
