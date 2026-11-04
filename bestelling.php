<?php
include "includes/functies.php";

$normaalPrijs = 85;
$vipPrijs = 150;

$maxTickets = 8;
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
        <?php
        if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["ticketAmount"]) && isset($_POST["ticketSoort"])) {
            $naam = htmlspecialchars($_POST["name"]);
            $email = $_POST["mail"];
            $aantal = (int) $_POST["ticketAmount"];
            $soort = $_POST["ticketSoort"];

            $fout = "";

            if (controleerEmail($email) == false) {
                $fout = $fout . "Je hebt geen geldig e-mailadres ingevuld.<br>";
            }

            if ($aantal < 1 || $aantal > $maxTickets) {
                $fout = $fout . "Je kunt minimaal 1 en maximaal " . $maxTickets . " tickets per bestelling bestellen.<br>";
            }

            if ($fout != "") {
                echo "<h3>Er ging iets mis met je bestelling</h3>";
                echo "<p>" . $fout . "</p>";
                echo "<a href='index.php'>Terug naar het bestelformulier</a>";
            } else {
                if ($soort == "vip") {
                    $prijs = $vipPrijs;
                    $soortTekst = "VIP tickets";
                } else {
                    $prijs = $normaalPrijs;
                    $soortTekst = "tickets";
                }

                $totaal = berekenTotaal($aantal, $prijs);

                echo "<h3>Bedankt voor je aankoop</h3>";
                echo "<p>" . begroeting($naam) . ", bedankt voor je bestelling van " . $aantal . " " . $soortTekst . " voor U2!</p>";
                echo "<p>Totaal prijs = <b>&euro;" . $totaal . "</b></p>";
                echo "<hr>";
            }
        } else {
            echo "<h3>Je hebt nog niks besteld</h3>";
            echo "<a href='index.php'>Naar het bestelformulier</a>";
        }
        ?>
    </main>

    <footer>
        <?php include "includes/footer.php"; ?>
    </footer>

</body>
</html>
