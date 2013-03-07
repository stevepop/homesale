<?php
$db_conn = new PDO('mysql:host=localhost;dbname=homesale', 'homes', 'homedb');
// perform query
$stmt = $db_conn->query('SELECT id, description, file_name, thumb_url FROM images');
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>