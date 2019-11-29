<?php

spl_autoload_register(function ($class) {
    require 'classes/' .$class. '.php';
});

$lucie = new Warrior('Lucie');
$anto = new Mage('Anto');
$jon = new Archer('Jon');
// Characters attacking while both alive
while ($lucie->isAlive() && $anto->isAlive()) {
    // First Character attacking the 2nd
    echo $lucie->action($anto);
    // Check if target is alive
    if (!$anto->isAlive()) {
        echo '<br>';
        echo "$anto->pseudo est KO!";
        echo '<br>';
        break;
    };
    echo '<br>';

    // Check if target is alive
    if (!$lucie->isAlive()) {
        // Second Character attaking the first
        echo $anto->action($lucie);
        echo '<br>';
        echo "$lucie->pseudo est KO!";
        echo '<br>';
        break;
    };
    echo '<br>';
    echo '<br>';
}

while ($lucie->isAlive() && $jon->isAlive()) {
    // First Character attacking the third
    echo $lucie->action($jon);
    // Check if target is alive
    if (!$jon->isAlive()) {
        echo '<br>';
        echo "$jon->pseudo est KO!";
        echo '<br>';
        break;
    };
    echo '<br>';

    // Check if target is alive
    if (!$lucie->isAlive()) {
        // third Character attaking the first
        echo $jon->arrowAtk($lucie);
        echo '<br>';
        echo "$lucie->pseudo est KO!";
        echo '<br>';
        break;
    };
    echo '<br>';
    echo '<br>';
}

while ($anto->isAlive() && $jon->isAlive()) {
    // Second Character attacking the third
    echo $anto->action($jon);
    // Check if target is alive
    if (!$jon->isAlive()) {
        echo "$jon->pseudo est KO!";
        echo '<br>';
        break;
    };
    echo '<br>';

    // Check if target is alive
    if (!$anto->isAlive()) {
        // Second Character attaking the first
        echo $jon->arrowAtk($anto);
        echo '<br>';
        echo "$anto->pseudo est KO!";
        echo '<br>';
        break;
    };
    echo '<br>';
    echo '<br>';
}