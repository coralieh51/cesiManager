<?php
try {
    $db = new PDO('mysql:host=localhost; dbname=gestionintervenants; charset=UTF8', 'root', '');
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    var_dump($th);
    die();
}
?>