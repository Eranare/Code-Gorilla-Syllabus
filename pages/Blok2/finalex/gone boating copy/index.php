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
                <a href="../../index.php"> back</a>
            <p class="text heading">Opdracht 10 - Boatrent </p>
            <p class="text paragraph">
            Een bedrijf verhuurt speedboten. Voor Één bepaalde dag wordt elk van de tien aanwezige speedboten hoogstens 1 keer verhuurd. 
            Gevraagd wordt een programma om de administratie van één dag bij te houden. 
            Per boot worden de volgende gegevens vastgelegd: gewicht, aantal pk motorvermogen, lengte en bootnummer en de huurprijs per uur. 
            Verder wordt afhankelijk van de verbruikte hoeveelheid brandstof een verhuur toeslag van 5 euro per liter berekend. 
            Voor verhuurde boten wordt vastgelegd aanvangstijd verhuur, eindtijd verhuur,aantal liters verbruikte brandstof en opgelopen schade. 
            Aan het einde van de dag wil de eigenaar de volgende gegevens gepresenteerd hebben: 
            -De totale omzet over alle boten; 
            -De totale verhuur tijd over alle boten; 
            -Het nummer van de boot met het hoogste brandstofverbruik per minuut tezamen met dit verbruik; 
            -Het percentage van de verhuurde boten dat schade heeft opgelopen; 
            -De boot die het kortst is verhuurd.
            </p>
        </div>
        <!-- YOUR APP GOES HERE -->
        <div class="container">
            <p class="text heading">App Output Here:</p>
            <p class="text paragraph">
                <?php
                    // ALL THE CLASSES WITH THEIR BEHAVIOR GO IN HERE.
                    require 'models/Boat.php';

                    require 'models/rentBoat.php';
                    require 'models/BoatCo.php';
                    // YOUR APP IS RUN FROM A MAIN FILE.
                    require 'controllers/app.php'
                ?>
            </p>
        </div>
    </div>

    <!-- SCRIPTS ARE INCLUDED HERE. -->
    <!-- <script type="text/javascript" src="path/filename.js"></script> -->
</body>

