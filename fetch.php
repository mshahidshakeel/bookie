<?php

    include_once('connect.php');

    $query = "SELECT * FROM books";
    $result = mysqli_query($dbc, $query);

    echo "<h1>Books</h1>";
    echo "<ul>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<li><a href='" . $row["url"] . "'>" . $row["name"] . "</a></li><br>";
        //echo json_encode($row);
    }

    echo "</ul>";