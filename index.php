<!DOCTYPE html>
<!-- ICS20-Programming-Unit4-01-PHP-GuessMyNumber -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Guessing a random number, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Guessing a Number, Using PHP</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
    <?php
      echo "<h1>Guess the Random Number</h1>";
      echo "<h3>This webpage has a secret number between 1 and 6. Guess it!</h3>";
    ?>
    <center>
    <img src="./images/random_numbers.jpeg" alt="Random Numbers Image" width="35%" height="35%">
    <!-- Form for the user's guess -->
    <form action="./results.php" method="post" target="results">
      <label for="lblUserGuess">Guess:</label>
      <input type="number" id="user-guess" step="1" min="1" max="6" placeholder="Eg. 5" name="user-guess"><br><br>
      <input type="submit" value="Submit guess">
    </form>
    <!-- iframe for the response to show on the web page. -->
    <iframe id="results" name="results"></iframe>
    </center>
  </body>
</html>