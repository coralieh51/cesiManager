<?php 
include("./components/header.php") ;
include("./components/db.php") ;

$id = $_GET['id'];
$sql = "SELECT * FROM speakers WHERE id = $id";
$req = $db->prepare($sql);
$req->execute();

$speaker = $req->fetch();
if(!$speaker){
    header('Location: intervenants.php');
}

?>

<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="./index.php"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="./intervenants.php">Intervenants</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">

        <!---------------------------------------------------------------------------------------------------------------------------

                                             METTRE LE CONTENU DE VOTRE PAGE CI-DESSOUS

        --------------------------------------------------------------------------------------------------------------------------->


        <div class="card col-12">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Modifier intervenant </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="./traitementInt.php?action=edit&id=<?=$id?>" method="POST">
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Nom</label>
                                    <input type="text" name="lastname" id="input-username" class="form-control" placeholder="Username" value="<?= $speaker['lastname']?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Prénom</label>
                                    <input type="text" name="firstname" id="input-email" class="form-control" placeholder="jesse@example.com" value="<?= $speaker['firstname']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Mail</label>
                                    <input type="mail" name="mail" id="input-first-name" class="form-control" placeholder="First name" value="<?= $speaker['mail']?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Téléphone</label>
                                    <input type="tel" name="telephone" id="input-last-name" class="form-control" placeholder="Last name" value="<?= $speaker['telephone']?>">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="./intervenants.php" class="btn btn-warning">Retour</a>
                            <button class="btn btn-success">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!---------------------------------------------------------------------------------------------------------------------------

                                                METTRE LE CONTENU DE VOTRE PAGE CI-DESSUS

      --------------------------------------------------------------------------------------------------------------------------->
    </div>

    <?php include("./components/footer.php") ?>