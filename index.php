<?php
session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phphome</title>
</head>
<body>
    <div>HI PASSW GEN</div>
    <form action="./logiche/passGen.php" method="post">
        <div>
            <div>
                <label for="lengthPw">
                    Inserisci lunghezza password<br>
                    La password generata avrà una certa percentuale di caratteri, simboli e numeri.
                </label>
            </div>
        </div>
        <div>
            <div>
                <input type="number" name="lengthPw" id="lengthPw" min="1" max="10" placeholder="Inserisci un numero da 1 a 10" required>
            </div>
        </div>
        <div>
            <div>
                <label for="randomCharPerc">
                    perfavore mettere numeri da 1 a 10 perche non ho configurato la logica per avere  10 
                </label>
                <input type="number" name="randomCharPerc" id="randomCharPerc" min="1" max="10" placeholder="1-10" required>
            </div>
        </div>
        <div>
            <div>
                <label for="randomSymbolPerc">
                    perfavore mettere numeri da 1 a 10 perche non ho configurato la logica per avere 10 
                </label>
                <input type="number" name="randomSymbolPerc" id="randomSymbolPerc" min="1" max="10" placeholder="1-10" required>
            </div>
        </div>
        <div>
            <div>
                <label for="randomNumbPerc">
                    perfavore mettere numeri da 1 a 10 perche non ho configurato la logica per avere 10
                </label>
                <input type="number" name="randomNumbPerc" id="randomNumbPerc" min="1" max="10" placeholder="1-10" required>
            </div>
        </div>
        <div>
            <button type="submit">
                Genera Password
            </button>
        </div>
    </form>

    <div>
        <div >
            <?php
                echo "password: " . ($_SESSION['password']);
            ?>
        </div>
    </div>

    <div>
        <form action="./logiche/clearSession.php" method="post">
            <button type="submit">LOGOUT</button>
        </form>
    </div>

</body>
</html>

