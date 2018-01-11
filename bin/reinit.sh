#!/usr/bin/env bash

echo "------------------------------------------------------------------------"
echo "                  Script de réinitialisation du projet                  "
echo "------------------------------------------------------------------------"

if [ "$#" = 0 ]
then
    echo "                  ERREUR                   "
    echo "Usage : sh bin/reinit.sh env [force]";
    echo "Option 'force' pour supprimer et recréer la base de données";
    echo "------------------------------------------------------------------------"
    exit;
fi

if [ "$1" = "preprod" ] || [ "$1" = "prod" ]
then
    echo "                  ERREUR                   "
    echo "Envirommement interdit !"
    echo "------------------------------------------------------------------------"
    exit;
fi

echo "Creation du fichier app/config/parameters.yml"
echo "------------------------------------------------------------------------"
rm app/config/parameters.yml
cp -f app/config/parameters.yml.dist app/config/parameters.yml
echo "=> OK"
echo "------------------------------------------------------------------------"

if [ "$2" = "force" ]
then
    echo "Suppression de la base de donnees"
    echo "------------------------------------------------------------------------"
    php bin/console doctrine:database:drop --force --if-exists --env=$1
    php bin/console doctrine:database:create --if-not-exists --env=$1
    php bin/console doctrine:schema:update --dump-sql --force --env=$1
    php bin/console doctrine:fixtures:load --append --purge-with-truncate --env=$1
else
    echo "Mise a jour du schéma de la base de données"
    echo "------------------------------------------------------------------------"
    php bin/console doctrine:schema:update --dump-sql --force --env=$1
fi
echo "=> OK"

echo "------------------------------------------------------------------------"
php bin/console assets:install web --symlink --env=$1
echo "=> OK"

echo "------------------------------------------------------------------------"
echo "Suppression et création du cache"
sudo rm -rf var/cache/*
sudo rm -rf var/logs/*
php bin/console cache:clear --env=$1
sudo chmod -R 777 var/cache
sudo chmod -R 777 var/logs
echo "=> OK"

echo "------------------------------------------------------------------------"
echo "Projet réinitialisé!"
echo ""
