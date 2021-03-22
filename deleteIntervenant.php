<?php 
include('./components/db.php');

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM speakers WHERE id=$id";
    $req = $db->prepare($sql);
    if ($req->execute()) {
        header('Location: intervenants.php');
    } else {
        $error = $req->errorInfo();
        if($error[0] == 23000){
            echo 'Impossible de supprimer l\'utilisateur car celui ci est déjà utilisé';
        } else {
            echo "Impossible de supprimer l'utilisateur";
        }
    }
}
?>
