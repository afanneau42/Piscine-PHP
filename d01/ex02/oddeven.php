#!/usr/bin/php
<?PHP
$nb = 0;

    echo "Entrez un nombre: ";
while ($nb = trim(fgets(STDIN)))
{ 
    if (is_numeric($nb))
    {
     if ($nb % 2)
         echo "Le chiffre $nb est Impair\n";
     else
         echo "Le chiffre $nb est Pair\n";
    }
    else
     echo "'$nb' n'est pas un chiffre\n";
    echo "Entrez un nombre: ";
}
?>