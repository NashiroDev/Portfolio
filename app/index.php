<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
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
                        <li><a href=""><b>TP - sauvegarde</b></a></li>
                        <li><a href=""><b>TP- Commandes linux</b></a></li>
                        <li><a href=""><b>TP - Assistance à distance</b></a></li>
                        <li><a href=""><b>TP - Adressage</b></a></li>
                        <li><a href=""><b>TP - E-réputation</b></a></li>
                        <li><a href=""><b>TP - WAMP server</b></a></li>
                        <li><a href=""><b>Présentation - Alder Lake</b></a></li>
                        <li><a href=""><b>Veille technologique</b></a></li>
                    </ul>
                </div>
                <div class="theme">
                    <h2>Entreprise 1e année</h2>
                    <ul class="card-list">
                        <li><a href=""><b>Support informatique</b></a></li>
                        <li><a href=""><b>Projet "Chatbot"</b></a></li>
                        <li><a href=""><b>Maintenance hardware</b></a></li>
                        <li><a href=""><b>Organisation de réunion</b></a></li>
                    </ul>
                </div>
                <div class="theme">
                    <h2>Entreprise 2e année</h2>
                    <ul class="card-list">
                        <li><a href=""><b>Présentation de solutions</b></a></li>
                        <li><a href=""><b>Direction de réunion avec un presta</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
    </main>
    <footer>
        <section>
            <div class="text">
                <p>Copyrights Nathan Pauchon</p>
            </div>
        </section>
    </footer>
</body>
</html>