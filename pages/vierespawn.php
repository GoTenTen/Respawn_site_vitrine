<?php
    $title = "La vie au respawn - Respawn";

    $css = ["vierespawn.css"];

    include "../includes/header.php";
?>
    <main>
        <h1>La vie au respawn</h1>
        <section id="actus">
            <h2>Actus</h2>
            <ul class="cards actus">
                <li><a href="#">
                        <div class="card-visuel">
                            <img src="../public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag tournoi">TOURNOI</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-01-01">date</time>
                    </a>
                </li>
                <li><a href="#">
                        <div class="card-visuel">
                            <img src="../public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag karting">KARTING</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-02-01">date</time>
                    </a>
                </li>
                <li><a href="#">
                        <div class="card-visuel">
                            <img src="../public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag food">FOOD</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-03-01">date</time>
                    </a>
                </li>
            </ul>
        </section>

        <section id="tournois">
            <h2>Prochains tournois</h2>
            <ul>
                <li><time datetime="2026-11-21">21 novembre</time> : tournoi Valorant 5v5, lot : 3 h de PC cheater</li>
                <li><time datetime="2026-12-05">5 décembre</time> : Grand Prix karting, lot : trophée et Pack Full Respawn</li>
                <li><time datetime="2026-12-19">19 décembre</time> : tournoi CS 2v2, lot : 2 Packs Focus</li>
            </ul>
        </section>

        <section id="classements">
            <h2>Classement du mois</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Rang</th>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Points</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>Joueur1</td><td>1250</td></tr>
                    <tr><td>2</td><td>Joueur2</td><td>1180</td></tr>
                    <tr><td>3</td><td>Joueur3</td><td>1050</td></tr>
                    <tr><td>4</td><td>Joueur4</td><td>990</td></tr>
                    <tr><td>5</td><td>Joueur5</td><td>920</td></tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <address>
            <ul>
                <li>Contactez-nous : <a href="mailto:contact@respawn.example">contact@respawn.example</a></li>
                <li>Appelez-nous : <a href="tel:+33639980000">06 39 98 00 00</a></li>
                <li>42 rue du gros gamer, 34042 MontpellierGaming</li>
                <li><p class="mention-ia">Certains contenus de ce site ont été réalisés avec l'aide d'une intelligence artificielle.</p></li>
            </ul>
        </address>
    </footer>
</body>
</html>