# TryingTech Docker

Ce projet a pour but de tester et d'essayer de comprendre la technologie Docker

## L'intérêt de Docker

[Docker](https://docs.docker.com/get-started/docker-overview/) est une plateforme open-source qui permet de créer, déployer et exécuter des applications dans des conteneurs.
Un conteneur est une unité logicielle standardisée qui regroupe le code d'une application et toutes ses dépendances, garantissant ainsi que l'application fonctionne de manière cohérente dans différents environnements.
Contrairement aux machines virtuelles, les conteneurs partagent le noyau de l'hôte, ce qui les rend plus légers et plus rapides à démarrer.
Docker simplifie le processus de développement et de déploiement en offrant une isolation complète des applications, ce qui permet de les exécuter de manière fiable et reproductible sur n'importe quelle machine ou cloud.

Dans le cadre de DevOps, Docker joue un rôle crucial en facilitant l'intégration continue et le déploiement continu (CI/CD).
Les conteneurs Docker permettent de créer des environnements de développement, de test et de production identiques, éliminant ainsi les problèmes de compatibilité et les fameux "ça marche sur ma machine".
Les Dockerfiles et les fichiers docker-compose.yml permettent de scriptifier le déploiement des applications, réduisant les erreurs humaines et automatisant les processus de build et de déploiement.
Docker s'intègre également facilement avec des outils d'orchestration comme Docker Swarm ou Kubernetes, permettant de gérer et de scaler automatiquement les applications conteneurisées. En facilitant la collaboration entre les équipes de développement et d'opérations.
Docker est l'élement fondamental pour accélérer les cycles de développement et pour améliorer la qualité des déploiements.

Pour les serveurs et les utilisateurs, Docker offre plusieurs avantages significatifs.
Tout d'abord, les conteneurs Docker sont extrêmement légers et utilisent moins de ressources système que les machines virtuelles, ce qui permet de faire tourner plus de conteneurs sur une même machine et d'optimiser l'utilisation des ressources.
Ensuite, Docker garantit une isolation complète des applications, ce qui améliore la sécurité en réduisant les risques de conflits et de vulnérabilités.
Les conteneurs permettent également de créer des environnements reproductibles, facilitant ainsi la gestion des dépendances et la résolution des problèmes.
Enfin, Docker simplifie la gestion des mises à jour et des mises à niveau des applications, permettant de déployer de nouvelles versions sans interruption de service.
En résumé, Docker offre une solution puissante et flexible pour le développement, le déploiement et la gestion des applications, en améliorant l'efficacité, la sécurité et la portabilité tout en réduisant les coûts et les complexités.

L'[installation](https://docs.docker.com/engine/install/) sur Linux est très facile et suffit amplement pour développer en local et déployer en prod.

## Lexique

- Docker Engine : c'est le moteur de Docker celui qui fait tourner les conteneurs à partir d'image.
- Dockerfile : c'est le "script" d'une image qui permet de construire et d'identifier toute ce qu'il y aura dans un conteneur.
- Docker Build : c'est un moteur de Docker qui permet de compiler une image, afin de la déposer sur un *registry* afin qu'elle soit disponible en téléchargement.
- Docker compose : c'est un autre moteur de Docker, qui permet de composer un service à partir de plusieurs conteneurs et de les liés entre eux.
- Docker swarm : c'est un autre moteur de Docker, qui permet d'orchestrer des noeuds, cluster de serveur et de répartir la charge entre les serveurs.

## Les commandes de bases

- `FROM` : Indique l'image de départ qui doit être une image officielle disponible sur le registry [Docker Hub](hub.docker.com)
- `RUN` : Exécute une commande Unix, qui sera exécuté selon l'os initial de l'image depuis le `FROM`
- `WORKDIR` : Indique le chemin où se trouvera l'utilitaire sur l'OS, pour la suite des opérations.
- `COPY` : Permet de copier des fichiers sur l'environnement hôte dans l'image de Docker.
- `CMD` : Indique les commandes à exécuter une fois qu'un conteneur sera lancée depuis cette image.

Toutes les commandes sont disponibles dans la documentation de [Docker](https://docs.docker.com/reference/dockerfile/).

## Exemples

- PHP
  - [PHP tout simple](php/README.md)
  - [PHP avec Symfony](php-symfony/README.md)
- Python
  - [Python tout simple](python/README.md)
