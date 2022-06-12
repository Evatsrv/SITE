<?php

$db = new mysqli('localhost','root','','suno');
$resource = $db->query('SELECT * FROM article');

while ( $row = $resource->fetch_assoc() ) {
    echo $row['IDArticle']." ";
}

$resource->free();
$db->close();

?>
