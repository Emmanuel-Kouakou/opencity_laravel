## LARAVEL_AUTOFORM

- Création d'un projet Laravel : Se rendre à la documentation. "composer create-project laravel/laravel example-app"

- Lancer le server de développement de Laravel : php artisan serve

- Initialiser notre dépot git : git init

- Vérifier le status de notre projet : git status

- Ajouter les fichiers ou nouvelles modifications effectuées au niveau du projet : git add -A

- Commettre l'ajout : git commit -m "message"

- Afficher un journal d'op"rations ou de dépôt utilisés.


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