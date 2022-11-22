<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Oefen Eindopdracht</title>

  <!-- STYLES ARE INCLUDED HERE -->
  <link rel="stylesheet" href="styles/main.css">

</head>

<body>

    <div class="flex wrapper">
        <!-- COPY THE ASSIGNMENT YOU CHOOSE TO PRACTICE HERE. -->
        <div class="container">
            <p class="text heading">Opdracht 9 - Catering</p>
            <p class="text paragraph">
                Een bedrijf verzorgt de catering van personen. Voor de periode aangegeven met een begindatum en een einddatum wordt de administratie voor een aantal klanten verwerkt. Een klant kan op een dag een voorgerecht (3 euro) en of een hoofdgerecht (5 euro)en of een nagerecht (2 euro) gebruiken.Voor een klant wordt opgeslagen de naam, aantal voorgerechten, aantal hoofdgerechten en aantal gerechten die de klant heeft gehad.
            </p>
            <p class="text paragraph">
                Uiteindelijk wil het bedrijf de volgende informatie gepresenteerd hebben:
Het totaal omgezette bedrag; De gemiddelde omzet per dag; De naam van de klant die voor het hoogste bedrag heeft geconsumeerd; De naam van de klanten die wel voorgerechten maar nooit een nagerecht hebben gehad; De namen van de klanten die voor een hoger bedrag dan het gemiddelde per klant hebben geconsumeerd.
            </p>
        </div>
        <!-- YOUR APP GOES HERE -->
        <div class="container">
            <p class="text heading">App Output Here:</p>
            <p class="text paragraph">
                <?php
                    // ALL THE CLASSES WITH THEIR BEHAVIOR GO IN HERE.
                    require 'models/Catering.php';
                    require 'models/Customer.php';
                    // YOUR APP IS RUN FROM A MAIN FILE.
                    require 'controllers/app.php'
                ?>
            </p>
        </div>
    </div>

    <!-- SCRIPTS ARE INCLUDED HERE. -->
    <!-- <script type="text/javascript" src="path/filename.js"></script> -->
</body>
