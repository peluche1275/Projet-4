<! -- ARTICLE -->
    <p><a href="/">Retour à l'accueil.</a></p>
    <article class="post">
        <header>
            <div class="title">
                <h2><?= $news['titre'] ?></h2>
            </div>
            <div class="meta">
                Le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?>
            </div>
        </header>
        <p><?= nl2br($news['contenu']) ?></p>

        <?php if ($news['dateAjout'] != $news['dateModif']) { ?>
            <p style="text-align: right;"><small><em>Modifiée le <?= $news['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>
        <?php } ?>
    </article>
    <p><a href="commenter-<?= $news['id'] ?>.html">Ajouter un commentaire</a></p>

    <! -- COMMENTAIRES -->

        <?php
        if (empty($comments)) {
        ?>
            <p>Aucun commentaire n'a encore été posté. Soyez le premier à en laisser un !</p>
        <?php
        }

        foreach ($comments as $comment) {
        ?>
            <fieldset>
                <legend>
                    Posté par <strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date']->format('d/m/Y à H\hi') ?>
                    <?php if ($user->isAuthenticated()) { ?> -
                        <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> |
                        <a href="admin/comment-delete-<?= $comment['id'] ?>.html">Supprimer</a> |
                    <?php } ?>
                    <a href="/signalement-<?= $comment['id'] ?>" id="signalement">Signaler</a>
                </legend>
                <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>
            </fieldset>
        <?php
        }
        ?>

        <p><a href="commenter-<?= $news['id'] ?>.html">Ajouter un commentaire</a></p>

        <p><a href="/">Retour à l'accueil.</a></p>