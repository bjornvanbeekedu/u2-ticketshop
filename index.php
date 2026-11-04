<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

    <header>
        <?php include "includes/header.php"; ?>
    </header>

    <main>
        <!-- formulier om tickets te bestellen -->
        <form method="POST" action="bestelling.php">

            <label for="name">Naam: </label><br>
            <input type="text" id="name" name="name" placeholder="naam" required>
            <br><br>

            <label for="mail">Email: </label><br>
            <input type="email" id="mail" name="mail" placeholder="email" required>
            <br><br>

            <label for="ticketAmount">Aantal tickets: </label><br>
            <input type="number" id="ticketAmount" name="ticketAmount" placeholder="aantal" min="1" max="5" required>
            <br><br>

            <input type="submit" name="submit" value="Bestel Tickets">

        </form>
    </main>

    <footer>
        <?php include "includes/footer.php"; ?>
    </footer>

</body>
</html>
