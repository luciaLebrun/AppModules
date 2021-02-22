# Environnements

[Retour au sommaire](index.md)

Pré-requis :
* PHP >= 7.4
* MySQL >= 5.7

Il existe plusieurs environnements différents :
* `dev`: environnement de développement
* `test`: environnement de test

Pour chaque environnement, il sera nécessaire de créer un fichier contenant les variables d'environnement.

## Environnement de développement
Exemple du fichier `.env.dev.local`.
```dotenv
# Nécessaire si vous souhaitez faire fonctionner les tests systèmes
DATABASE_URL=mysql://root:password@127.0.0.1:3306/appModules
```

## Environnement de test
Il est indispensable de créer le fichier `.env.test.local` pour assurer le bon fonctionnement des tests, vous pouvez vous baser sur cet exemple :
```dotenv
# Nécessaire si vous souhaitez faire fonctionner les tests systèmes
DATABASE_URL=mysql://root:password@127.0.0.1:3306/appModules
```

Il est préférable d'insérer les variables d'environnement dans la configuration du virutalhost en production.