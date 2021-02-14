#Installation

[Retour au sommaire](index.md)

## Récupérer les sources du projet
```
git clone https://github.com/<your-username>/<repo-name>
```

## Pré-requis

* PHP 7.4
* Composer
* Symfony CLI
* Docker & Docker-compose OU WAMP

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (de la CLI Symfony) :

```dotenv
symfony check:requirements
```

## Installer les dépendances

Dans un premier temps, positionnez vous dans le dossier du projet :

```
cd <repo-name>
```

Exectuer la commande suivante
```
composer install
```

### Lancer l'environnement de développement

```
docker-composer up -d
symfony serve -d
```

*Si vous utilisez wamp lancez simplement l'application.*

## Initialiser les base de données

```
composer prepare
```

Ajouter des 

## Lancer des tests

```dotenv
php bin/phpunit --testdox
```