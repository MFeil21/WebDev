 <?php include ("query.php") ?>
 
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Team MathesFeilWetzl" charset="utf-8">
    <title>Ergebnis der Wahl</title>
    <link rel="stylesheet" href="style.css" >
    <meta name="json" content="<?= htmlspecialcharacters($json) ?>">
  </head>
  <header>
     
  </header>
  <body>
    <div class="page">
      <div class="leftBox">

        <!-- NavBar -->
        <nav class="NavBar" style="--items: 4;">
          <ul>
            <li><a class="active" href="#Wahlergebnis">Wahlergebnis</a></li>
            <li><a href="#news">Sitzverteilung</a></li>
            <li><a href="#contact">Auswertung nach Alter</a></li>
            <li><a href="#about">Auswertung nach Studiengang</a></li>
          </ul>
        </nav>

        <!-- Charts -->
        <div id="container">
          
          <canvas id="donut", width="200" height="200"></canvas>
          <br>
          <canvas id="balken", width="600" height="200"></canvas>

        </div>
      </div>
    </div>
  </body>
  <script src = "script.js">
  </script>
</html>
