# Les variables

Une variable est un espace mémoire que l'on réserve pour stocker une information (un chiffre, une chaine de caractères, etc...) 
Le nom de la variable est comme une étiquette pour retrouver l'espace mémoire en question et lire ce qu'il y a dedans.
Une variable commence toujours par $ en php. exemple : $maVariable. Le nom d'une variable doit commencé par une minuscule puis s'il y a plusieurs mots chaque mot doit être collé et commencer par une majuscule.

```php
$numero;
$maVariable;
$count;
$countItems
$uneLongueVariable;
```

Lorsqu'on donne une première valeur à une variable on dit qu'on l'initialise. Souvent on déclare et on initialise une variable en même temps.

```php
$numero = 1;
$maChaine = "une chaine de caractères";
```

Si on veut afficher le contenu d'une variable on peut utiliser la fonction echo:

```php
$numero = 1;
echo $numero;
// affiche 1
```

Pour vous entrainer, résolvez les exercices suivants.
Attention a être très précis et faire exactement ce que l'ennoncé demande.

@[Exercice 1 ]({"stubs": ["Variable1.php"], "command": "/bin/bash runVariable1.sh"})
