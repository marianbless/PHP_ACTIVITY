<?php

$user_id = $_REQUEST["id"];


include("connections.php");

$query_delete = mysqli_query($connections,  "SELECT * FROM mytbl WHERE id = '$user_id' ");







?>