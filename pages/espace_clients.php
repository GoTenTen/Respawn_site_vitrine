<?php
    $title = "Espace clients - Respawn";

    $css = ["formulaires.css"];

    include "../includes/header.php";
?>
    <main>
        <h1>Espace client</h1>
        <section>
            <form action="#">
                <fieldset>
                    <legend>Connexion</legend>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">

                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp">

                    <button type="button">Se connecter</button>
                </fieldset>

                <p><a href="#">Mot de passe oublié ?</a></p>
                <p>Pas encore de compte ? <a href="#">Créer un compte</a></p>
            </form>
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