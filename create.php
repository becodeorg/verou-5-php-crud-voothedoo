<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add an item</title>
  <link rel="stylesheet" href="./style/create.css">
</head>
<body>
  <header>
    <div class="links">
    <ul>
      <li><a href="http://localhost/BeCode/3.The-Mountain/07.%20CRUD-php/">Home</a></li>
    </ul>
  </div>
  </header>
  <main>
    <div>
      <form action="" method="POST">
        <label for="team">Team:</label>
        <input type="text" name="team" id="team" autocomplete="off">

        <label for="season">Season:</label>
        <input type="number" name="season" id="season" autocomplete="off">

        <label for="player">Player:</label>
        <input type="text" name="player" id="player" autocomplete="off">

        <label for="size">Size:</label>
        <input type="text" name="size" id="size" autocomplete="off">

        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" autocomplete="off">

        <label for="condition">Condition:</label>
        <input type="text" name="condition" id="condition" autocomplete="off">

        <button name="submitBtn" value="submit">Submit</button>
      </form>
    </div>
  </main>
</body>
</html>