<?php
include '../public/data.php';

if (isset($_POST['lengthPw'])) {
    $passwordLength = $_POST['lengthPw']; 

    // i nuovi parametri  * 10 per trasformarli in due cifre
    $randomCharPerc = $_POST['randomCharPerc'] * 10;  
    $randomSymbolPerc = $_POST['randomSymbolPerc'] * 10;  
    $randomNumbPerc = $_POST['randomNumbPerc'] * 10;  

    $generatedPassword = GeneratePassword($passwordLength, $randomCharPerc, $randomSymbolPerc, $randomNumbPerc);
    $_SESSION['password'] = $generatedPassword;

    header("Location: ../index.php");
}

function GeneratePassword($passwordLength, $randomCharPerc, $randomSymbolPerc, $randomNumbPerc) {
    $alphabetList = $_SESSION['alphabetList'];
    $symbolList = $_SESSION['symbolList'];
    $numberList = $_SESSION['numberList'];
    $newPassword = [];

    // calcola il conteggio per ciascun tipo di carattere utilizzando floor
    $randomCharCount = floor($passwordLength * $randomCharPerc / 100);
    $randomSymbolCount = floor($passwordLength * $randomSymbolPerc / 100);
    $randomNumbCount = floor($passwordLength * $randomNumbPerc / 100);

    // aggiungiamo il resto a randomCharCount
    $totalCount = $randomCharCount + $randomSymbolCount + $randomNumbCount;
    $remaining = $passwordLength - $totalCount;
    $randomCharCount += $remaining;

    function aggiungiCaratteriCasuali(&$newPassword, $listaCaratteri, $conteggio) {
        for ($i = 0; $i < $conteggio; $i++) {
            $carattereDaMettere = $listaCaratteri[array_rand($listaCaratteri)];
            $newPassword[] = $carattereDaMettere;
        }
    }

    aggiungiCaratteriCasuali($newPassword, $alphabetList, $randomCharCount);
    aggiungiCaratteriCasuali($newPassword, $symbolList, $randomSymbolCount);
    aggiungiCaratteriCasuali($newPassword, $numberList, $randomNumbCount);


    return (count($newPassword) == $passwordLength) ? implode("", $newPassword) : "c'e' un errore";
}
?>

