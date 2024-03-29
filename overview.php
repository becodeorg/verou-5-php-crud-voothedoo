<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hala Madrid!</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<header>
  <div class="title">
  <h1 class="title">Los Blancos Boutique </h1>
  <p>A Real Madrid jersey collection.</p>
  </div>
    <div class="links">
      <ul>
        <li><a href="?action=create">Add an item</a></li>
      </ul>
    </div>
</header>
<main>
  <?php foreach ($cards as $card) : ?>
  <form action="?action=delete" method="POST">
    <ul class="card Id<?= $card['id'] ?>">
      <li><span>Team: </span><?= $card['team'] ?></li>
      <li><span>Season: </span><?= $card['season'] ?></li>
      <li><span>Player: </span><?= $card['player'] ?></li>
      <li><span>Size: </span><?= $card['size'] ?></li>
      <li><span>Brand: </span><?= $card['brand'] ?></li>
      <li><span>Condition: </span><?= $card['condition'] ?></li>
      <button class="editBtn">Edit Article</button>
      <button class="deleteBtn" name="deleteBtn" value=<?=$card['id']?> >Delete</button>
      <br>
    </ul>
  </form>
    <?php endforeach; ?>
</main>
<footer></footer>
</body>
</html>