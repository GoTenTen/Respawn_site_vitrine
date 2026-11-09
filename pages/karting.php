<?php
    $title = "Karting - Respawn";

    $css = ["karting.css"];

    include "../includes/header.php";
?>
    <main>
        <h1>Karting indoor</h1>
        <section>
            <h2>Nos formules</h2>
            <ul class="cards karting-cards">
                <li>
                    <a href="../pages/reservation.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire-->
                        <h3>Session libre</h3>
                        <p>Durée : 20min</p>
                        <p>Prix : 3€</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/reservation.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Grand Prix</h3>
                        <p>Durée : 45 min</p>
                        <p>Prix : 7 €</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/reservation.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Entre potes</h3>
                        <p>Durée : 1 h</p>
                        <p>Prix : 9 € / pers.</p>
                    </a>
                </li>
            </ul>
        </section>
        <section>
    <h2>Avant de rouler</h2>
    <ul class="infos-karting">
        <li>Âge minimum : 12 ans (1,40 m)</li>
        <li>Équipement fourni : casque, charlotte et combinaison</li>
        <li>Tenue conseillée : chaussures fermées, cheveux attachés</li>
        <li>Arrivée : 15 min avant pour le briefing sécurité</li>
    </ul>
</section>
    </main>
    <?php

    include "../includes/footer.php";
?>