# Site web de BeeSafe

Ce repository contient le site web de BeeSafe.
La branche `sql` contient les sources du site web ainsi que les scripts SQL nécessaires à la création de la base de données. Ces sources sont écrites avec les langages PHP/SQL et nécessitent donc une stack [LAMP](https://fr.wikipedia.org/wiki/LAMP) afin de fonctionner.

Le site nécessite donc plusieurs machines pour pouvoir être opérationnel :
- Une machine pour le service Apache 2.4 et PHP 8.0 pour le code source ;
- Une machine pour le service MySQL 8.0 pour la connexion SQL ;
- Une machine pour le service DNS avec Bind9.

Vous trouverez dans le dossier `sql` de cette branche tous les scripts nécessaires à la création de la table et les données associés. Il vous faudra, dans un premier temps, créer votre base de données sur MySQL et un compte d'exploitation avec les accès CRUD sur cette base. Vous pourrez ensuite créer la table et injecter les données.
