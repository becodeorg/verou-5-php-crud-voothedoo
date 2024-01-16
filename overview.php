<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hala Madrid!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<h1 class="text-4xl text-center">Los Blancos Boutique - A Real Madrid jersey collection.</h1>

<ul>
  <?php foreach ($cards as $card) : ?>
    <li>Team: <?= $card['team'] ?></li>
    <li>Season: <?= $card['season'] ?></li>
    <li>Player: <?= $card['player'] ?></li>
    <li>Size: <?= $card['size'] ?></li>
    <li>Brand: <?= $card['brand'] ?></li>
    <li>Condition: <?= $card['condition'] ?></li>
    <br>
  <?php endforeach; ?>
</ul>

</body> 
</html>