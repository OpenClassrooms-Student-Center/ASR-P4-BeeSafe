# Site web de BeeSafe

Ce repository contient le site web de BeeSafe, une startup dans l'assurance.
La branche `master` dans laquelle vous vous trouvez contient uniquement les sources du site web. Ces sources sont écrites avec le langage PHP et nécessite donc une stack [LAMP](https://fr.wikipedia.org/wiki/LAMP) afin de pouvoir fonctionner.

Le site nécessite donc plusieurs machines pour pouvoir être opérationnel :
- Un serveur Apache 2.4 et PHP 8.0 pour le code source
- Un serveur MySQL 8.0 pour la connexion SQL
- Un serveur Bind9 pour la résolution DNS

La branche `master` ne contient pas les scripts SQL nécessaire à la connexion. Ces scripts sont présent dans la branche sql de ce projet.