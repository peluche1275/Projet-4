<?php
?>

<h2>Modération</h2>



<?php
if (empty($listModeration)) 
{
    ?>  <p>Aucun commentaire à modérer !</p> <?php
} 
else 
{ ?> 

    <p>Voici la liste des commentaires à modérer :</p> 
    
<?php
foreach ($listModeration as $mod) 
{
    $comment = $commentsManager->get($mod['id']);
    ?>
    <p> <strong> <?php echo $comment['auteur'] ?></strong></p>
    <p> <?php echo $comment['contenu'] ?> </p>
    <a href="/../admin/comment-approve-<?= $comment['id'] ?>.html">Approuver</a> |
    <a href="/../admin/comment-hide-<?= $comment['id'] ?>.html">Cacher</a>
<?php
    }
}
