<!DOCTYPE html>
<html>

<head>
  <title>
    <?= isset($title) ? $title : 'Blog de Jean Forteroche' ?>
  </title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/css/main.css" type="text/css" />
  <link rel="icon" href="/images/favicon.ico" />
</head>

<body>
  <div id="wrapper">
    <header id="header">
      <h1><a href="/">Blog de Jean Forteroche</a></h1>
      <nav class="links">
        <ul>
          <li><a href="/">Accueil</a></li>
          <?php if ($user->isAuthenticated()) { ?>
            <li><a href="/admin/">Gestion des billets</a></li>
            <li><a href="/admin/news-insert.html">Ajouter un billet</a></li>
            <li><a href="/admin/moderation/">Modération</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>

    <div id="main">
      <section>
        <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>

        <?= $content ?>
      </section>
    </div>

    <footer></footer>
  </div>
</body>

</html>