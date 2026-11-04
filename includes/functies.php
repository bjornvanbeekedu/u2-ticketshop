<?php

// rekent uit hoeveel je moet betalen
function berekenTotaal($aantal, $prijs)
{
    $totaal = $aantal * $prijs;

    // vanaf 4 tickets krijg je 10% korting
    if ($aantal >= 4) {
        $totaal = $totaal * 0.9;
    }

    return $totaal;
}

// maakt de begroeting met de naam
function begroeting($naam)
{
    return "Beste " . $naam;
}

// kijkt of het e-mailadres goed is
function controleerEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

?>
