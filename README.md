caro_g_faim
===========

A Symfony project created on March 16, 2016, 2:50 pm.

###INSTALLATION

Pour la future base de données, soit utiliser le compte "root", soit un compte utilisateur dédié (en créer un depuis PHPMyAdmin, ayant pour l'instant tous les droits)

Puis dans le bash :

```bash
composer install
./chmod.sh

php app/console doctrine:database:create
php app/console doctrine:schema:update --force
mysql -uroot -p the_app_database_name < ./database/initialdata.sql
```

Si on a créé un compte utilisateur dédié :
Depuis PHPMyAdmin, supprimer les droits accordés, 
puis accorder tous les droits uniquement pour la base de données que l'on vient de créér.