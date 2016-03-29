#!/bin/bash
mysql -ucaro_g_faim -pcaro caro_g_faim < database/preupdate.sql
app/console doctrine:generate:entities CaroGFaimBundle
app/console doctrine:schema:update --force


