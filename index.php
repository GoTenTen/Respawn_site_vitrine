<?php
    $title = "Accueil - Respawn";

    $css = ["accueil.css"];

    include "includes/header.php";
?>
    <main>
        <div class="hero">
            <h1>Respawn Gaming Lounge</h1>
            <p class="slogan">Gaming · Karting · Food</p>
            <a href="pages/reservation.html" class="bouton">Réserver</a>
        </div>
        <section>
            <h2>Qui sommes nous...</h2>
            <p>
                Nous sommes un gaming lounge qui veut te faire passer des sessions de jeu comme jamais auparavant. Entre gaming, coaching, tournois, karting ou pause repas, l'objectif est que tu ne manques de rien ici.
            </p>
            <!-- TODO : 2-3 photos (poste PC, repas, groupe karting) -->
        </section>
        <div class="services">
            <section>
                <h2>Viens jouer quand tu veux</h2>
                <p>
                    Chez Respawn, on met à ta disposition de vraies machines de guerre, taillées pour tes besoins. Si tu veux les PC les plus performants, avec du matériel plus puissant, pense à réserver ta machine au préalable !
                </p>
                <a href="pages/config_pc.html" class="bouton">Nos PCs</a>
            </section>
            <section>
                <h2>Entre deux games, joues dans la vraie vie</h2>
                <p>
                    Si ta session ne se passe pas comme prévu, ou si tu veux simplement changer de monde, rejoins d'autres pilotes dans des courses de karting effrénées. Tu pourrais même repartir avec un trophée !
                </p>
                <a href="pages/karting.html" class="bouton">Le karting</a>
            </section>
            <section>
                <h2>Ou fais le plein d'énergie</h2>
                <p>
                    Découvre les distributeurs et les repas à la carte, parfois compris dans la formule, disponibles sur place ou livrés directement à ta station de jeu si tu es trop focus dans tes games.
                </p>
                <a href="pages/restauration.html" class="bouton">La carte</a>
            </section>
        </div>
        <section>
            <h2>Actualité des respawners</h2>
            <ul class="cards actus">
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag tournoi">TOURNOI</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-01-01">date</time>
                    </a>
                </li>
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag collab">COLLAB</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-02-01">date</time>
                    </a>
                </li>
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag karting">KARTING</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-03-01">date</time>
                    </a>
                </li>
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag cheater">CHEATER</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-04-01">date</time>
                    </a>
                </li>
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag food">FOOD</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-05-01">date</time>
                    </a>
                </li>
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag gaming">GAMING</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-06-01">date</time>
                    </a>
                </li>
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag event">EVENT</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-07-01">date</time>
                    </a>
                </li>
                <li><a href="pages/actus.html"> <!-- Redirection temporaire -->
                        <div class="card-visuel">
                            <img src="public/images/respawn_icone_red.svg" alt="placeholder">
                            <span class="tag infos">INFOS</span>
                        </div>
                        <h3>titre</h3>
                        <time datetime="2000-08-01">date</time>
                    </a>
                </li>
            </ul>
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