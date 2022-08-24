## LARAVEL_AUTOFORM

- Création d'un projet Laravel : Se rendre à la documentation. "composer create-project laravel/laravel example-app"

- Lancer le server de développement de Laravel : php artisan serve

- Initialiser notre dépot git : git init

- Vérifier le status de notre projet : git status

- Ajouter les fichiers ou nouvelles modifications effectuées au niveau du projet : git add -A

- Commettre l'ajout : git commit -m "message"

- Afficher un journal d'opérations ou de dépôt utilisés : git log


### Structure MVC

- Modèles : relative à la base de données.

- Vues : pages affichées au niveau du navigateur.

- Controllers : Intermédiaire entre le modèle et la vue, chef d'orchestre, celui qui donne les directives.


### Dossier App de notre projet Laravel

- console : permet de définir nos propres commandes au niveau de la console.

- Exceptions : permet de créer des exceptions.

- <strong>Http/Controllers :<strong> Ou on va définir nos controllers.

- <strong>Http/ Middleware : <strong> permet de faire des vérif lorsqu'une requete est envoyée avant d'envoyer une réponse. EX : Le processus d'authentification.


- <strong>Models : </strong> C'est qu'on va mettre nos modèles.

Models et Controllers sont dans app.

- <strong>Providers : </strong> : important ! permet de bootstrappé l'app. Gestion des routes.


### Dossier public

- Tt les fichiers mis au niveau de ce dossier seront accessible publiquement.

### Dossier Config

- Les différentes configurations de notre projet. Connexion à la BD, ... 

### Dossier Ressources

- Fichiers static et les vues



--------------------------------------------------------------------------
### Les directives de blade


- blade : Moteur de template de laravel. Permet d'afficher quelque chose de dynamique ({{ }}).

- Les directives blades commence avec @.
 
- Définition du Layout de base : @yield('content') 

- Hériter du layout de base : @extends('cheminDeLaVueDeBase')

- Mettre une section à l'endroit indiqué : @section('content')  ...  @endsection, on peut aussi fermer ce bloc en mettant @stop.

- https://www.delftstack.com/howto/git/git-lf-will-be-replaced-by-crlf/

- .env contient les variables d'environnement, on peut y accéder en tapant env("clevarenv").

- Les fichiers .env et config sont liés, on peut utilisé config pour accéder aux variables d'environnement.

- Pourquoi config ? Faire en sorte que l'app soit plus rapide que possible. On a la possibilité de créer un fichier de cache qui va nous permettre de rendre rapide la configuration. php artisan config:cache. Après cette commande, la fonction env doit être uniquement utilisé dans le dossier config et non en dehors.

- php artisan config:cache accélère le chargement de notre configuration.

- Nous avons la possibilité d'ajouter un nom à nos routes.

- git commit --amends : ajoute la modif au même commit.

- Faire appel à la fonction helper asset pour avoir part à un fichier public.


### Deploiement de l'application

- Création d'un compte heroku

- Installation de heroku CLI

- heroku login : pour se connecter à heroku depuis notre post

- heroku create nomApp : pour créer l'app ou se rendre sur leur site pour le faire

- git remote : en créer notre app sur heroku, il nous crée deux remote, une pour push et une pour fetch

- Créer un fichier : Procfile

- git push heroku main