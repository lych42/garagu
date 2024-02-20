Garage Vincent Parrot

Evaluation en Cours de Formation Juin 2024

Environnement de développement
Pour installer et exécuter l'application localement, vous devez disposer des prérequis suivants :

    Symfony 8.2.3
    PHP 8.2.0
    Composer
    Laragon
    Github
    Nodejs et npm

Vous pouvez vérifier si ces prérequis sont installés sur votre machine en exécutant la commande suivante via la CLI Symfony :

    symfony check:requirements
    composer require

Installation

Voici les étapes à suivre pour lancer l'environnement de développement :

Clonez le dépôt Github de l'application (ou téléchrgez le Zip)

Installez les dépendances en exécutant la commande suivante dans le répertoire racine du projet

    composer install 
    npm install 
    npm run build

Installez la base de données avec la commande 

    symfony console d:m:m

Lancer le serveur web 

Enfin, lancez l'application Symfony avec la commande suivante :

    symfony serve-d


