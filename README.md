# CodeTranslator

Organisation des Dossiers

app
|-------controller
|	|
|	|	Le but est faire le lien entre les pages model (Base de données) et view (affichage à l'utilisateur)
|	|	Elles sont charger de faire les vérifications d'erreur de saisie, de sécurité, etc. Elles peuvent
|	|	Utiliser des libraires pour les fonctions réutilisables
|
|-------model
|	|
|	|	Ce dossier contient les containers qui effectuent les modifications sur la base de données, les pages
|	|	controller appelent les pages model pour effectuer ces modifications. Seuls les pages modèles sont
|	|	autorisées à accéder à la BdD.
|
|-------view
|	|
|	|	Ce sont les pages affichées à l'utilisateur. Les pages view sont appelées par les pages controleurs.
|	|	Elles ne sont composées que de HTML/CSS. La partie php étant calculée par le controlleur et donnée
|	|	en paramètres lors de l'appel de la page view.
|
develop
|
|	Cette partie contient les fichiers en cours d'écriture servant de test
|
documents
|
|	Contient les documents relatifs au site (Diagramme de classe, maquette psd, etc...)
|
entity
|
|	Contient les classes de bases du site, Algorithm, User, Layout, Mail, Translation, etc...
|
library
|
|	Contient les fonctions et objets réutilisables par les pages controller comme par exemble la fonction de vérification
|	de formulaire, identification des utilisateurs, etc...
phpdoc
|	
|	Contient la documentation des classes php
|
web
|
|	Contient les objets nécassaires à l'affichage des pages (Css, Image, Font etc...)
|
