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
            <p class="text heading">Opdracht 8 - Contributie </p>
            <p class="text paragraph">
                Bij het bepalen van de jaarlijkse contributie voor een sportvereniging gelden de volgende regels:
                Seniorleden betalen € 150,=, juniorleden € 75,=. Men is senior lid als men 18 jaar of ouder is.
                Spelende leden betalen bovendien nog € 45,= bondscontributie.Voor leden die langer dan 7 jaar lid zijn, wordt op de clubcontributie 5% korting in
                rekening gebracht.
            </p>
            <p class="text paragraph">
                Er dient een programma te worden ontwikkeld waarmee voor elk lid de naam,geboortedatum en datum van ingang lidmaatschap
                (formaat ddmmjjjj) kunnen worden ingevoerd, evenals of het lid wel of niet spelend lid is. Voor elk lid moet de contributie berekend en getoond worden.
                Verder moet cumulatief de totale contributie, het gemiddeld aantal lidmaatschap jaren en het jongste lid worden getoond.
            </p>
        </div>
        <!-- YOUR APP GOES HERE -->
        <div class="container">
            <p class="text heading">App Output Here:</p>
            <p class="text paragraph">
                <?php
                    // ALL THE CLASSES WITH THEIR BEHAVIOR GO IN HERE.
                    require 'models/Example.php';
                    // YOUR APP IS RUN FROM A MAIN FILE.
                    require 'controllers/app.php'
                ?>
            </p>
        </div>
    </div>

    <!-- SCRIPTS ARE INCLUDED HERE. -->
    <!-- <script type="text/javascript" src="path/filename.js"></script> -->
</body>
