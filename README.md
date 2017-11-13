# Debug like a Ninja
![](images/whiteblock.jpg)

![](images/ninja.png)

![](images/whiteblock.jpg)


## Debug, why?

![](images/whiteblock.jpg)

Réponse courte:
> Qui aime les bugs?

![](images/whiteblock.jpg)

Réponse longue:

### Les variables, l'atome de la programmation

Le principe de base (le plus simplifié) d'un programme informatique est le suivant:

1. On reçoit des **informations**
> par exemple un json avec les infos nécessaires pour faire une TodoList

2. On traite ces **informations** avec une certaine logique (algorithme) qui menera à d'autres **informations**
> par exemple construire une TodoList

3. On renvoye ces **informations** 
> par exemple afficher une TodoList dynamique



Donc tout tourne autour d'informations, ces particules élémentaires de la programmation, les **variables**.



Or, pour savoir si le programme fonctionne lorsqu'on développe un programme on a tout intérêt à tester l'état de ces **variables** à chaque étape.


> Donc, si on résume, si tu écris du code et que tu testes pas les choses au fur et à mesure de deux choses une, soit
> 
> 1. T'es un génie
> 2. T'es con
> 
> Pour tous les autres on va préférer debuguer.

Donc, quand on fait du code, on teste, on débugue. (POINT)

![](images/whiteblock.jpg)


### Et voici quelques techniques ninjitsu et armes tranchantes pour Debuguer comme un NINJA




![](images/whiteblock.jpg)

## Debug en PHP

![](images/whiteblock.jpg)


### PHP.INI -> le BE-A-BA


Tout d'abord si on veut voir les erreurs sur PHP il faut pas oublier d'activer l'affichage des Erreurs / Infos (warnings) dans la config de php.

Pour savoir la config actuelle tapez `<?php phpinfo();?>` sur une page et lancez sur un navigateur.

Pour modifer ces configs il faut modifier le fichier **php.ini**. Vous le trouverez le plus souvent à l'intéieur de votre serveur apache local (MAMP/XAMPP/LAMPP/etc...).

Sur MAMP il se trouve dans MAMP/bin/php/php[versionUneTelle]/conf/php.ini

`display_errors = Off` et changer par `display_errors = On`
![](images/whiteblock.jpg)


### Fonctions Internes de Débogage


Pour tester une variable **$var** il existe ces trois fonctions dans php:

	var_dump($var);
	echo $var;
	print_r($var);


On peut également créer ses propres fonctions de débogage en utilisant ces dernières comme:

```
function debug($var){ //DEBUG
	echo '<pre>';
	echo print_r($var);
	echo '<pre>';
}

function dd($var){ //DEBUG and DIE
	debug($var);
	die();
}
```

A ce moment là on peut tester nos variables:

```
// Affiche la valeur de la variable
debug($var);
// Affiche la valeur de la variable et arrête le programme
dd($var);
```
![](images/whiteblock.jpg)


### Outils Externes


#### Dump_r: `print_r` sous stéroids.

[https://github.com/leeoniya/dump_r.php](https://github.com/leeoniya/dump_r.php)

`dump_r($var);`

***

#### Kint: `dump_r` sous stéroids.

[https://github.com/kint-php/kint](https://github.com/kint-php/kint)

`d($var);`

***

#### PhpDebugBar: la console pour php.

[http://phpdebugbar.com](http://phpdebugbar.com)

***

#### Whoops: Ça donne envie de faire des erreurs!

[https://github.com/filp/whoops](https://github.com/filp/whoops)




![](images/whiteblock.jpg)

## Debug en Javascript : L'inspecteur aka le SABRE LASER du Front
### Valable pour tous les navigateurs (bon j'ai pas testé Internet Explorer, désolé)

![](images/whiteblock.jpg)



Coder du javascript sans l'inspecteur, c'est comme rouler la nuit sans phare et avec des lunettes de soleil: c'est possible mais on évite quand même.


##### Voici quelques raisons pour utiliser l'inspecteur:


* Lire les erreurs / les warnings

La console affiche par défaut les erreurs dès qu'il y a quelque chose qui cloche! 

Le plus souvent la console nous indique à quelle ligne il y a erreur, et le pourquoi du comment. Ça réduit pas mal les possibilités de source d'erreur.

* Debuguer Etape par Etape!

Les inspecteurs viennent avec la fonctionnalité de "Deboguage" qui permet de faire pause à certains endroits du code et avancer ligne par ligne.

Live demo ICI et MAINTENANT!


* Appeler / Modifier des variables/fonctions de ton code

En fait la console des inspecteurs, en plus d'afficher des erreurs, permet d'executer du javascript (en surface) sur la page actuelle. Ce qui veut dire que l'on peut appeler des fonctions, afficher des variables, changer des variables et tout et tout!

Live demo ICI et MAINTENANT!


![](images/whiteblock.jpg)



