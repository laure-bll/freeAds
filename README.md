# freeAds

Ce projet est un site de petites annonces. Une fois inscrit et connecté, l'utilisateur peut ajouter des annonces, les modifier et les supprimer. 

# installation

- Installer Laravel

- Configurer le fichier ".env" pour permettre l'accès à la base de données et l'envoi d'un email de confirmation à l'utilisateur après inscription. La configuration se fait dans les lignes ci-dessous dans le fichier ".env" : 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=freeads
DB_USERNAME=root
DB_PASSWORD=

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

# execution

Lancer le projet avec la commande "php artisan serve" et se rendre sur le lien indiqué.

# fabrication

- Laravel
- MySQL
- Bootstrap

# creation

- Laure Bellanger

