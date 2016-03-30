caro_g_faim
===========

A Symfony project created on March 16, 2016, 2:50 pm.

###INSTALLATION

```bash
composer install
./chmod.sh
php app/console doctrine:schema:update --force
mysql -uroot -p the_app_database_name < ./database/initialdata.sql
```
