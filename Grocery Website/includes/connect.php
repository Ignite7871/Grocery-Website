<?php

$conn = mysqli_connect('localhost','root', '','quirkyshap');
if (!$conn) {
    echo "Connection unsuccessful: " . mysqli_connect_error();
}

?>