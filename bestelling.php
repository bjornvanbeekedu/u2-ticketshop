<?php
include "includes/functies.php";

// prijs van 1 ticket
$prijs = 85;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bedankt voor je aankoop</title>
</head>
<body>

    <header>
        <?php include "includes/header.php"; ?>
    </header>

    <main>
        <h3>Bedankt voor je aankoop</h3>

        <?php
        // kijken of het formulier is ingevuld
        if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["ticketAmount"])) {

            // gegevens uit het formulier halen
            $naam = htmlspecialchars($_POST["name"]);
            $aantal = htmlspecialchars($_POST["ticketAmount"]);

            // totaalprijs uitrekenen met de functie
            $totaal = berekenTotaal($aantal, $prijs);

            echo "<p>" . begroeting($naam) . ", bedankt voor je bestelling van " . $aantal . " tickets voor U2!</p>";
            echo "<p>Totaal prijs = <b>&euro;" . $totaal . "</b></p>";
            echo "<hr>";
        }
        ?>
    </main>

    <footer>
        <?php include "includes/footer.php"; ?>
    </footer>

</body>
</html>
