<?php
session_start();

// liste 
$alphabetList = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$symbolList = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', '\\', ':', ';', '"', "'", '<', '>', ',', '.', '?', '/'];
$numberList = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

// sessioni
$_SESSION['alphabetList'] = $alphabetList;
$_SESSION['symbolList'] = $symbolList;
$_SESSION['numberList'] = $numberList;

