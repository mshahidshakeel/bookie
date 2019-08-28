<?php
    DEFINE ('DB_USER', 'root');
    DEFINE ('DB_PASS', '');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'bookie_db');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    OR die('Could Not Connect to MySql <br/>' . mysqli_connect_error());