# Introduction à Redis et Description de l'Application

## Redis
Redis est une base de données NoSQL en mémoire, rapide et flexible, utilisée pour stocker, récupérer et gérer des données de manière efficace. Il offre des fonctionnalités avancées telles que le stockage de paires clé-valeur, la prise en charge de structures de données complexes et la mise en cache haute performance.

## Description de l'Application
Cette application est une application CRUD (Create, Read, Update, Delete) simple basée sur PHP, JavaScript et HTML. L'application suit une architecture MVC (Modèle-Vue-Contrôleur) pour une organisation claire du code.

### Architecture de l'application :
- **Modèles** : Gère les interactions avec la base de données Redis.
- **Vues** : Affiche l'interface utilisateur et récupère les entrées utilisateur.
- **Contrôleurs** : Traite les requêtes utilisateur, effectue les opérations nécessaires et retourne les résultats.

## Configuration de Redis avec Laragon
Laragon est un environnement de développement local qui facilite la configuration et l'exécution d'applications web sur Windows. Pour utiliser Redis avec Laragon, suivez ces étapes simples :
1. **Activer l'extension Redis** : Dans Laragon, allez dans **Menu** -> **Extensions** -> **Redis** et assurez-vous que l'extension Redis est activée. Cela garantit que Redis est disponible pour votre application.

2. **Vérifier la configuration de Redis** : Ouvrez le fichier de configuration de PHP (`php.ini`) et assurez-vous que l'extension Redis est correctement configurée. Vous devriez voir une ligne comme celle-ci : `extension=php_redis.dll`.

3. **Redémarrez le serveur web** : Après avoir activé l'extension Redis, redémarrez votre serveur web pour appliquer les modifications.

## Utilisation de Redis
1. **Installation de Redis** : Téléchargez et installez Redis à partir du site officiel ou utilisez un gestionnaire de packages.
2. **Connexion à Redis** : Utilisez un client Redis pour vous connecter à votre instance Redis.
3. **Stockage des données** : Utilisez des commandes Redis telles que `SET`, `GET`, `HSET`, `LPUSH`, etc., pour stocker et récupérer des données.
4. **Gestion des structures de données** : Utilisez des commandes spécifiques aux structures de données Redis pour manipuler les données de manière efficace.

Pour en savoir plus sur Redis et son utilisation, consultez la documentation officielle sur [redis.io](https://redis.io/documentation).
