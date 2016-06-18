<?php

function display_registration_form()
{
?>
<form method=post action="Account.php">





</form>
The items with * in front of them are required fields.<p>
    <?php

    }



    function display_menu($orders)
    {
        // display the menu options on the bottom of this page

        echo '<hr /><center>&nbsp;|&nbsp';

        foreach($orders as $key => $value)
        {
            echo '<a href='.$key.'>'.$value.'</a> |&nbsp';
        }

        echo '</center><hr />';
    }


    ?>
