<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Respawn" ?></title>
    <link rel="stylesheet" href="/public/styles/style.css">
    <?php foreach ($css ?? [] as $fichier_css) { ?>
    <link rel="stylesheet" href="/public/styles/<?= $fichier_css?>"> <?php } ?>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/index.php"><img src="/public/images/respawn_logo_clair.svg" alt="icone_respawn"  class="icone_nav"></a></li>
                <li>
                    <a href="#">Prestations</a>
                    <ul>
                        <li><a href="/pages/config_pc.php">Config PCs</a></li>
                        <li><a href="/pages/karting.php">Karting indoor</a></li>
                        <li><a href="/pages/restauration.php">Restauration</a></li>
                    </ul>
                </li>
                <li><a href="/pages/vierespawn.php">La vie au respawn</a></li>
                <li><a href="/pages/tarifs.php">Tarifs</a></li>
                <!--<li><a href="/pages/nos_equipes.php">Nos équipes</a></li>-->
                <li><a href="/pages/espace_clients.php">Espace client</a></li>
                <li><a href="/pages/reservation.php">Réservation</a></li>
            </ul>
        </nav>
    </header>