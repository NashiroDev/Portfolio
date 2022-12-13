<?php session_start();
include_once('/app/config/variables.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".<?= $stylePath ?>main.css">
    <link rel="stylesheet" href=".<?= $stylePath ?>styles.css">
    <title>Portfolio</title>
</head>
<body>
    <?php include_once('./templates/header.php'); ?> 
    <main>
        <div class="title-banner">
            <h1><u>Portfolio de Nathan Pauchon regroupant les différentes activités proffesionnalisante au cours de la période du BTS.</u></h1>
        </div>
        <div class="section">
            <h1 class="title" id="link-1">Ressources</h1>
            <h4 class="title">____________________________</h4>
            <div class="themes-row">
                <div class="theme">
                    <h2>Formation</h2>
                    <ul class="card-list">
                        <li><a href="./templates/gallery.php?id=2"><b>TP - sauvegarde</b></a></li>
                        <li><a href="./templates/gallery.php?id=tp_commandesLinux"><b>TP - Commandes linux</b></a></li>
                        <li><a href="./templates/gallery.php?id=tp_assistanceADistance"><b>TP - Assistance à distance</b></a></li>
                        <li><a href="./templates/gallery.php?id=tp_adressage"><b>TP - Adressage</b></a></li>
                        <li><a href="./templates/gallery.php?id=tp_eReputation"><b>TP - E-réputation</b></a></li>
                        <li><a href="./templates/gallery.php?id=tp_wamp"><b>TP - WAMP server</b></a></li>
                        <li><a href="./templates/gallery.php?id=pres_alderLake"><b>Présentation - Alder Lake</b></a></li>
                        <li><a href="./templates/gallery.php?id=pres_veilleTechnologique"><b>Veille technologique</b></a></li>
                    </ul>
                </div>
                <div class="theme">
                    <h2>Entreprise 1e année</h2>
                    <ul class="card-list">
                        <li><a href="./templates/gallery.php?id=support_informatique"><b>Support informatique</b></a></li>
                        <li><a href="./templates/gallery.php?id=projet_chatbot"><b>Projet "Chatbot"</b></a></li>
                        <li><a href="./templates/gallery.php?id=maintencance_hardware"><b>Maintenance hardware</b></a></li>
                        <li><a href="./templates/gallery.php?id=organisation_reunion"><b>Organisation de réunion</b></a></li>
                    </ul>
                </div>
                <div class="theme">
                    <h2>Entreprise 2e année</h2>
                    <ul class="card-list">
                        <li><a href="./templates/gallery.php?id=pres_solutions"><b>Présentation de solutions</b></a></li>
                        <li><a href="./templates/gallery.php?id=direction_réunionPresta"><b>Direction de réunion avec un presta</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
    </main>
    <?php include_once('./templates/footer.php'); ?>
</body>
</html>