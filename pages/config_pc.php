<?php
    $title = "Nos PCs - Respawn";

    $css = ["config_pc.css"];

    include "../includes/header.php";
?>
    <main>
        <h1>Nos PCs</h1>
        <section>
            <ul  class="cards pc-cards">
                <li>
                    <a href="../pages/reservation.html" class="low-end">
                    <img src="../public/icones/pc.svg" alt=""> <!-- image temporaire-->
                    <h3>Le noob</h3>
                    <p>Bas de gamme</p>
                    <ul>
                        <li>AMD Ryzen 5 5600X</li>
                        <li>RTX 5060</li>
                        <li>16 Go de RAM (DDR4)</li>
                    </ul>
                    <p>4€ / Heure</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/reservation.html" class="mid-end">
                    <img src="../public/icones/pc.svg" alt=""> <!-- image temporaire-->
                    <h3>Le challenger</h3>
                    <p>Milieu de gamme</p>
                    <ul>
                        <li>AMD Ryzen 7 7700X</li>
                        <li>RTX 5070 Ti</li>
                        <li>32 Go de RAM (DDR5)</li>
                    </ul>
                    <p>7€ / Heure</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/reservation.html" class="high-end">
                    <img src="../public/icones/pc.svg" alt=""> <!-- image temporaire-->
                    <h3>Le cheater</h3>
                    <p>Haut de gamme</p>
                    <ul>
                        <li>AMD Ryzen 7 9800X3D</li>
                        <li>RTX 5090</li>
                        <li>32 Go de RAM (DDR5)</li>
                    </ul>
                    <p>10€ / Heure</p>
                    </a>
                </li>
            </ul>
        </section>
    </main>
    <?php

    include "../includes/footer.php";
?>