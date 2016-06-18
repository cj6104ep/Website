<?php
error_reporting(E_ALL^E_DEPRECATED);

function db_connect()
{
    $result = mysql_pconnect("localhost", "ics311sp1631", "446887");
    if (!$result)
        return false;
    if (!mysql_select_db("ics311sp1631"))
        return false;

    return $result;
}

?>