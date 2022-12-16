<?php session_start();

include_once('/app/config/variables.php');
include_once('/app/requests/fichiers.php');

if (isset($_GET["id"])) {
    $fichier = getInfoByID($_GET["id"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $stylePath; ?>main.css">
    <link rel="stylesheet" href="<?= $stylePath; ?>styles.css">
    <title>Portfolio</title>
</head>
<body>
    <?php include_once($rootTemplates.'header.php'); ?>
    <main>
        <div class="little-container">
            <div class="sub-title">
                <h1><?= $fichier['nom'] ?></h1>
            </div>
            <div class="content">
                <div class="intro-text">
                    <h4>Période : <?= $fichier['periode'] ?></h4>
                    <h3><?= $fichier['3'] ?></h3>
                </div>
                <div class="fichier">
                    <?php foreach(getRepositoryContent($fichier['4']) as $image) : ?>
                        <div class="page">
                            <img src="<?= $image ?>" alt="No file">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </main>







    <?php include_once('./templates/footer.php'); ?>
</body>
</html>