# Les bool�ens

Les bool�ens sont une analogie du circuit �lectronique : le courant passe correspond � true, le courant ne passe pas correspond � false.

Il n'ont que 2 �tats possibles : vrai ou faux, true ou false.


```php
$bool1 = true;
$bool2 = false;
```

Comme les nombres, les bool�ens poss�des des op�rateurs. C'est � dire qu'on peut les combiner et obtenir un r�sultat qui sera un autre bool�en.
Ces op�rateurs sont des op�rateurs logiques : le OU (||), le ET (&&), le NON(!)

## Le OU logique

Le r�sultat d'un OU entre 2 booleens est vrai si l'un ou l'autre des op�randes est vrai.

Exemple:
```php
$bool1 = false;
$bool2 = false;
echo ($bool1 || $bool2)
// affiche false

$bool1 = true;
$bool2 = false;
echo ($bool1 || $bool2)
// affiche true

$bool1 = false;
$bool2 = true;
echo ($bool1 || $bool2)
// affiche true

$bool1 = true;
$bool2 = true;
echo ($bool1 || $bool2)
// affiche true
```

Pour visualiser le OU dans la vie courante vous pouvez penser � cet exemple :

Je veux me doucher. Si j'ai du savon ou du gel douche ou les deux je peux me laver. Par contre si je n'ai ni l'un ni l'autre je ne pourrais pas me laver.

## Le ET logique

Le r�sultat d'un ET entre 2 booleens est vrai si l'un et l'autre des op�randes est vrai.

Exemple:
```php
$bool1 = false;
$bool2 = false;
echo ($bool1 && $bool2)
// affiche false

$bool1 = true;
$bool2 = false;
echo ($bool1 && $bool2)
// affiche false

$bool1 = false;
$bool2 = true;
echo ($bool1 && $bool2)
// affiche false

$bool1 = true;
$bool2 = true;
echo ($bool1 && $bool2)
// affiche true
```

Pour visualiser le ET dans la vie courante vous pouvez penser � cet exemple :

Je veux manger un steack. Si je n'ai pas de couverts c'est impossible. Si j'ai une fourchette mais pas de couteau c'est impossible, si j'ai le couteau mais pas la fourchette c'est toujours impossible.
Par contre si j'ai la fourchette ET le couteau, je vais vite manger ce steack!

## Le NON logique

Le NON logique sert � inverser une valeur bool�enne. 

Exemple:
```php
$bool1 = true;
echo !bool1
// Affiche false

$bool2 = false;
echo !bool2
// affiche true
```

## Pourquoi le bool�en ?

Les bool�ens sont super puissants. C'est gr�ce � eux qu'on va pouvoir traduire une grande partie de notre logique c�r�brale, notre pens�e.

Par exemple, vous vous demandez si vous �tes riche. La r�ponse est un bool�en : oui je pense que je le suis, non je ne pense pas.
Mais qu'est ce qui vous permet d'arriver � cette conclusion bool�enne? 

Imaginons que votre seuil pour vous consid�rer comme riche est de gagner 10 000 dollars par mois. Vous allez comparer votre salaire et 10 000 et si vous �tes au dessus vous penserez que vous �tes riche.
Si vous �tes dessous vous vous sentirez pauvre.
La machine est b�te dans le sens o� ce n'est pas elle qui va fixer ce seuil de 10 000 c'est vous. Et elle ne sera ni contente ni emb�t�e du r�sultat de cette comparaison. Ca se sont vos �motions.

La programmation vous permets donc de traduire votre raisonnement logique mais c'est vous qui fixez les valeurs et les seuils et vous qui analyser ou ressentez le r�sultat.

Exemple :
```php
$monSalaire = 5000;
$seuil = 10000;

$resultat = ($monSalaire > $seuil)
// resultat contient un booleen qui vaut false
// Autrement dit je suis pauvre :(

// Je change de salaire, le seuil ne change pas
$monSalaire = 11000;
$resultat = ($monSalaire > $seuil)
// resultat contient un booleen qui vaut true
// Autrement dit je suis riche :)
```

Vous l'avez compris, on g�n�re souvent des bool�ens en comparant deux valeurs ou deux variables.

Voici les op�rateurs de comparaison courants :
```php
$a = 3;
$b = 6;
$d = 6;

echo $a < $b; // Plus petit que
// Affiche true

echo $b <= $d; // Plus petit ou egal
// Affiche true

echo $a > $b; // Plus grand que
// Affiche false

echo $b >= $d; // Pus grand ou egal 
// Affiche true

$c = "3";

echo $a === $b; // strictement �gal (en type et en valeur)
// Affiche false

echo $a === $a;
// Affiche true

echo $a === $c;
// Affiche false car $a est un entier et $c est une chaine de caracteres

echo $a == $c; // egal en valeur
// Affiche true

echo $a == $b;
// Affiche false
```

