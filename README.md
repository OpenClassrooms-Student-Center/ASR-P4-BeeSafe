# Site web de BeeSafe

Ce repository contient le site web de BeeSafe, une startup dans l'assurance.
La branche `sql` dans laquelle vous vous trouvez contient les sources du site web ainsi que les scripts SQL nécessaire à la création de la base de données. Ces sources sont écrites avec les langages PHP/SQL et nécessite donc une stack [LAMP](https://fr.wikipedia.org/wiki/LAMP) afin de pouvoir fonctionner.

Le site nécessite donc plusieurs machines pour pouvoir être opérationnel :
- Un serveur Apache 2.4 et PHP 8.0 pour le code source
- Un serveur MySQL 8.0 pour la connexion SQL
- Un serveur Bind9 pour la résolution DNS

Vous trouverez dans le dossier `sql` de cette branche tous les scripts nécessaires à la création de la table et les données associés. Il vous faudra dans un premier temps créer votre base de données sur MySQL et un compte d'exploitation avec les accès CRUD sur cette base. Vous pourrez ensuite créer la table et injecter les données.