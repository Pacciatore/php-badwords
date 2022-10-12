<?php

$testText = 'Sono una frase, con delle parole che successivamente vengono censurate.';
$bannedWord = $_GET['toBan'];
$pCensored = str_replace($bannedWord, "***", $testText);


?>

<p> <?= $testText ?> </p>

<p> <?= 'Lunghezza del paragrafo: ' . strlen($testText) ?> </p>

<p> Censura della parola: <?= $bannedWord ?> </p>

<p> Testo con censura: <?= $pCensored ?> </p>