<?php

function berekenTotaal($aantal, $prijs)
{
    $totaal = $aantal * $prijs;

    if ($aantal >= 4) {
        $totaal = $totaal * 0.9;
    }

    return $totaal;
}

function begroeting($naam)
{
    return "Beste " . $naam;
}

function controleerEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

?>
