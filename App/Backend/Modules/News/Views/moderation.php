<?php
?>

<h2>Modération</h2>

<p>Voici la liste des commentaires à modérer :</p>

<?php
foreach ($listModeration as $mod) {
?>
    <?php $comment = $commentsManager->get($mod['idcom']);
    ?>
    <p> <strong> <?php echo $comment['auteur'] ?></strong></p>
    <p> <?php echo $comment['contenu'] ?> </p>
    <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> |
    <a href="admin/comment-delete-<?= $comment['id'] ?>.html">Supprimer</a>
<?php
}
