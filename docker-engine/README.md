# Docker Engine

Pour comprendre le fonctionnement du Docker Engine, voici quelques commandes : 

## Commandes de Docker Engine

On va lancer un conteneur basé sur l’image php-fpm:8.3 et comprendre ce qu’on peut faire :  
- `docker pull php:8.3-fpm` pour télécharger les commandes de l’image et la build en local
  - `docker image ls` pour lister les images disponibles en local
- `docker run php:8.3-fpm` pour lancer le conteneur
- `docker container ls` : pour lister les conteneurs en cours

Une fois le docker lancé on lancer des commandes :  
- `docker exec -it ${LeNom} pwd` : afficher le chemin actuel
- `docker exec -it ${LeNom} bash` : se connecter dessus

On peut ajouter des options sur `docker run`  
- `docker run - -name myPHP php:8.3-fpm` : donner un nom
- `docker run - -name myPHP --rm php:8.3-fpm` : pour le supprimer à l’arrêt
- `docker run -v ./main.php:/var/www/html/main.php myPHP php:8.3-fpm` :  pour attacher un fichier
- `docker exec -it ${LeNom} php main.php` : pour ensuite exécuter le script

La commande complète :  
- `docker run --name myPHP --volume ./main.php:/var/www/html/main.php -e MAX_TRY=20 --rm php:8.3-fpm`

## Simplifier une configuration de compose.yaml
