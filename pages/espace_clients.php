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
    <?php

    include "../includes/footer.php";
?>