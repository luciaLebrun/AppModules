# AppModules

Cette application web a pour but de faciliter l'organisation au sein de modules universitaire.

## Documentation
La documentation est disponible [ici](docs/index.md).

## Mise en oeuvre

### Pré-requis

* PHP 7.4
* Composer
* Symfony CLI
* Docker & Docker-compose OU WAMP

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (de la CLI Symfony) :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
docker-composer up -d
symfony serve -d
```

*Si vous utilisez wamp lancez simplement l'application.*

### Lancer des tests

```bash
php bin/phpunit --testdox
```