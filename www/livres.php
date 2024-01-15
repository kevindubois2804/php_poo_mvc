<?php
require_once "Livre.class.php";
$livre1 = new livre(1, "De la neige", "https://images.pexels.com/photos/19474657/pexels-photo-19474657/free-photo-of-rhume-neige-bois-noir-et-blanc.jpeg", 200);
$livre2 = new livre(2, "Une maison", "https://images.pexels.com/photos/7609113/pexels-photo-7609113.jpeg", 147);
$livre3 = new livre(3, "Une montagne", "https://images.pexels.com/photos/5683351/pexels-photo-5683351.jpeg", 498);
$livre4 = new Livre(4, "Un joli coq", "https://img.freepik.com/vecteurs-libre/coq-rouge-coq-vue-cote-resume_1284-16627.jpg", 236);

require_once "LivreManager.class.php";
$livreManager = new LivreManager();

$livreManager->ajouterLivre($livre1);
$livreManager->ajouterLivre($livre2);
$livreManager->ajouterLivre($livre3);
$livreManager->ajouterLivre($livre4);


?>

<?php ob_start() ?>

<p>Bonne lecture !</p>

<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php foreach ($livreManager->getLivres() as $livre) : ?>
        <tr>
            <td class="align-middle"><img src="<?php echo $livre->getImage() ?>" height="150px" width="130px" alt="Livre apprentissage du CSS"></td>
            <td class="align-middle"><?php echo $livre->getTitre() ?></td>
            <td class="align-middle"><?php echo $livre->getNbDePages() ?></td>
            <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="#" class="bouton-ajouter btn btn-success d-block">Ajouter</a>

<?php
$titre = "Ma bibliothèque";
$content = ob_get_clean();
require_once "template.php";
