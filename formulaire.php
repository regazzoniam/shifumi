<?php

function formulaire() {//définition de la fonction formulaire

echo'
<p>Faites votre choix : </p>
<form method="POST">
        <p>Papier <i class="fa-solid fa-hand"></i><input type="radio" name="shifumi" value="Papier"/></p>
        <p>Caillou <i class="fa-solid fa-hand-back-fist"></i><input type="radio" name="shifumi" value="Caillou"/></p>
        <p>Ciseaux <i class="fa-solid fa-hand-scissors"></i><input type="radio" name="shifumi" value="Ciseaux"/></p>
        <p><input type="submit" value="Shi-fu-mi" /></p>
</form>
';
}
