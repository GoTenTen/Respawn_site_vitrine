<?php
    $title = "Tarifs - Respawn";

    $css = ["tarifs.css"];

    include "../includes/header.php";
?>
    <main>
        <h1>Tarifs</h1>
        <section>
            <table class="grille-tarifs">
                <thead>
                    <tr>
                        <th scope="col">Prestation</th>
                        <th scope="col">Formule</th>
                        <th scope="col">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Poste PC</td><td>Le noob</td><td>4 € / h</td></tr>
                    <tr><td>Poste PC</td><td>Le challenger</td><td>7 € / h</td></tr>
                    <tr><td>Poste PC</td><td>Le cheater</td><td>10 € / h</td></tr>
                    <tr><td>Karting</td><td>Session libre (20 min)</td><td>3 €</td></tr>
                    <tr><td>Karting</td><td>Grand Prix (45 min)</td><td>7 €</td></tr>
                    <tr><td>Karting</td><td>Entre potes (1 h)</td><td>9 € / pers.</td></tr>
                </tbody>
            </table>
        </section>


        <section id="packs">
            <h2>Nos packs</h2>
            <ul class="cards packs">
                <li>
                    <a href="../pages/reservation.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Pack Focus</h3>
                        <p>2 h de PC challenger + 1 repas</p>
                        <p><del>26 €</del> 22 €</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/reservation.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Pack Pilote</h3>
                        <p>Grand Prix + 1 h de PC challenger</p>
                        <p><del>14 €</del> 12 €</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/reservation.html">
                        <img src="../public/images/respawn_icone_red.svg" alt=""> <!-- image temporaire -->
                        <h3>Pack Full Respawn</h3>
                        <p>3 h de PC cheater + session libre + 1 repas</p>
                        <p><del>45 €</del> 38 €</p>
                    </a>
                </li>
            </ul>
        </section>
    </main>
    <?php

    include "../includes/footer.php";
?>