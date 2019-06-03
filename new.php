<?php
echo "<link rel='stylesheet' href='cssfile.css'>";

$a = $_POST["pic"];
if (filter_var($a, FILTER_VALIDATE_URL) === FALSE) {
    die('Not a valid URL');
}
else{
    echo '<img src="'.$a.'" width="233px" height="233px" class="move">';
}


