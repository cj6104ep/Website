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
                <li><a href= forms.php>Register</a></li>
                <li><a href= Logout.php>Logout</a></li>
            </ul>
        </nav>
    </div>
    <div id="Content"></div>
    <div id="PageHeading"></div>
    <h1>You have Successful Logged in. </h1>
    <div id="ContentLeft"></div>
    <h2></h2><br/>
    <br />
    <img src="Images/profile.png" id="profile">
    <div id="ContentRight">
        <form method="post" action="successful.php">
        <h2>User Information:</h2>
        <br/>
            <?php
            //If form not submitted, display form.
            if (isset($_POST['update'])){
                //Retrieve show string from form submission.
                $txt = $_POST['text'];
                echo "$txt";
                //If form submitted, process input.
            } else {
            }
            ?>
            <br/><br/>
        <textarea rows="5" cols="60" name="text">
            Enter information about yourself here.
        </textarea>
    </div>

        <input type="submit" name="update" id="update" value="Update" /></td>
    </form>
<footer class="mainfooter">
    <div id="Footer">
        <div class="social">
            <h3>Contact</h3>
            <hr>
            <p> Location: 2420 Cleveland Ave N, Roseville, MN 55113</p>
            <p> Phone: 651-896-0964</p>
        </div>
        <div class="social">
            <h3>Stay Connected</h3>
            <hr>
            <a class="social facebook" href=""><img src="Images/facebook-icon.png">
            </a>
            <a class="social twitter" href=""><img src="Images/twitter-icon.png">
            </a></br>
            <a class="social instagram" href=""><img src="Images/Instagram-icon.png">
            </a>
            <a class="social gmail" href=""><img src="Images/G-mail-icon.png">
            </a>
        </div>
    </div>
</footer>
    </div>
</body>
</html>