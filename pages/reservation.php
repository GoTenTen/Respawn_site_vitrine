<?php
    $title = "Réservation - Respawn";

    $css = ["formulaires.css"];

    include "../includes/header.php";
?>
    <main>
        <h1>Réservation</h1>
        <section>
            <form action="#" method="post">

                <!-- fieldset = groupe de champs liés, legend = son titre
                    (affiché en haut du cadre et lu par les lecteurs d'écran) -->
                <fieldset>
                    <legend>Ta prestation</legend>
                    <label for="prestation">Prestation</label>
                    <select id="prestation" name="prestation" >
                        <option value="">Choisir…</option>
                        <optgroup label="Postes PC">
                            <option value="pc-noob">Le noob (4 €/h)</option>
                            <option value="pc-challenger">Le challenger (7 €/h)</option>
                            <option value="pc-cheater">Le cheater (10 €/h)</option>
                        </optgroup>
                        <optgroup label="Karting">
                            <option value="kart-libre">Session libre (3 €)</option>
                            <option value="kart-gp">Grand Prix (7 €)</option>
                            <option value="kart-potes">Entre potes (9 €/pers.)</option>
                        </optgroup>
                        <optgroup label="Packs">
                            <option value="pack-focus">Pack Focus (22 €)</option>
                            <option value="pack-pilote">Pack Pilote (12 €)</option>
                            <option value="pack-full">Pack Full Respawn (38 €)</option>
                        </optgroup>
                    </select>

                    <label for="personnes">Nombre de personnes</label>
                    <!-- min/max : le navigateur bloque les valeurs absurdes sans JS -->
                    <input type="number" id="personnes" name="personnes" min="1" max="10" value="1">
                </fieldset>

                <fieldset>
                    <legend>Quand ?</legend>
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date">

                    <label for="heure">Heure d'arrivée</label>
                    <input type="time" id="heure" name="heure">
                </fieldset>

                <fieldset>
                    <legend>Tes coordonnées</legend>
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom">

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </fieldset>

                <button type="submit">Valider ma réservation</button>
            </form>
        </section>
    </main>
</body>
</html>