# Site web de BeeSafe

Ce repository contient le site web de BeeSafe.
La branche `master` contient uniquement les sources du site web. Ces sources sont écrites avec le langage PHP et nécessitent donc une stack [LAMP](https://fr.wikipedia.org/wiki/LAMP) afin de pouvoir fonctionner. De plus, ce site est à déployer sur une architecture 3-tiers.

Le site nécessite donc plusieurs machines pour pouvoir être opérationnel :
- Une machine pour le service Apache 2.4 et PHP 8.0 pour le code source ;
- Une machine pour le service MySQL 8.0 pour la connexion SQL ;
- Une machine pour le service DNS avec Bind9.

La branche `master` ne contient pas les scripts SQL nécessaires à la connexion. Ces scripts sont présent dans la branche sql de ce projet.
