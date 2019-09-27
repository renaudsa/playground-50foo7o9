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

@[Exercice 2 ]({"stubs": ["Variable2.php"], "command": "/bin/bash runVariable2.sh"})


Les chaines de caractères et les variables peuvent être assemblées pour afficher un texte dynamique. 
En règle gnérale 2 chaines de caractères peuvent être collées l'une à l'autre à l'aide du "."

On appelle cela la concaténation. Le "." est l'opérateur de concaténation.

```php
$taille = 1.66;

echo 'Je mesure '.$taille.' metres';

// Affiche : Je mesure 1.66 metres
```

On peut aussi insérer les variables directement dans les chaines de caractères si celles-ci sont entre double guillemets

```php
$taille = 1.66;

echo "Je mesure $taille metres";

// Affiche : Je mesure 1.66 metres
```

Continuez à pratiquer avec les exercices suivants

@[Exercice 3 ]({"stubs": ["Variable3.php"], "command": "/bin/bash runVariable3.sh"})

@[Exercice 4 ]({"stubs": ["Variable4.php"], "command": "/bin/bash runVariable4.sh"})

