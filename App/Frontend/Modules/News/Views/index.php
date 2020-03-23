<section id="intro">
    <header>
        <h2>Jean Forteroche</h2>
        <p>Le blog de l'acteur et écrivain</p>
    </header>
</section>

<?php
foreach ($listeNews as $news) {
?>
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
            </div>
            <div class="meta">
                Le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?>
            </div>
        </header>
        <p><?= nl2br($news['contenu']) ?></p>
    </article>
<?php
}
