<?php ob_start() ?>

<p>Ceci est un parapgraphe sans intérêt</p>

<?php
$titre = "Heyyy bienvenue sur ma page d'accueil";
$content = ob_get_clean();
require_once "template.php";
