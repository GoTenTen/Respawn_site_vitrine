<?php
    $title = "Restauration - Respawn";

    $css = ["restauration.css"];

    include "../includes/header.php";
?>
    <main>
        <h1>Restauration</h1>
        <section>
            <h2>Nos partenaires</h2>
            <ul class="cards food-cards">
                <li>
                    <a href="../pages/tarifs.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Le Burger Boss</h3>
                        <p>Burgers et frites</p>
                        <p>De 9 à 15 €</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/tarifs.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Pizza Lag</h3>
                        <p>Pizzas au feu de bois</p>
                        <p>De 10 à 16 €</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/tarifs.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Green Buff</h3>
                        <p>Bowls et snacking healthy</p>
                        <p>De 8 à 13 €</p>
                    </a>
                </li>
            </ul>
        </section>
        <section>
            <h2>Comment ça marche</h2>
            <ul class="infos-food">
                <li>Commande au comptoir ou directement depuis ton poste</li>
                <li>Livraison à ta station de jeu, sans quitter ta partie</li>
                <li>Distributeurs de boissons et snacks en libre-service 24 h/24</li>
                <li>Repas inclus dans certains packs, voir <a href="../pages/tarifs.html#packs">nos tarifs</a></li>
            </ul>
        </section>
    </main>
    <?php

    include "../includes/footer.php";
?>