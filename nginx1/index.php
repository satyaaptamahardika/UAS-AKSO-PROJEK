<?php

$con = new mysqli('mysql_db','root','root','mysql');

$if($con)
{
    echo "connected succes";
}