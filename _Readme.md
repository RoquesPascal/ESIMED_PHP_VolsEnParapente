# Exercice 2 - PHP

> Cet exercice doit permettre de saisir, d'afficher, de modifier ou de supprimer des données concernant des sauts en parachute. 

### Table FLY : 
- _**id**_ : Integer + primary key +  auto increment
- _**date**_ : Date
- _**location**_ : Varchar(200)
- _**altitude_from**_ : Integer (altitude décollage)
- _**altitude_to**_ : Integer (altitude atterissage)
- _**time**_ : Integer
- _**comment**_ : Text(NULLable)

### Routes : 
- /index.php
  - [x] Liste des vols (tableau)
  - [x] redirection vers la route /show.php
  - [x] boutton ajouter
- /add.php
  - [x] formulaire d'ajout
  - [x] redirection show
- /edit.php
  - [x] Edition avec valeurs préécrites
  - [x] redirection show
- /delete.php
  - [x] suppression
  - [x] redirection
- /show.php
  - [x] consultation 
  - [x] lien édition
  - [x] lien suppression
  - [x] retour

faire le grand 4 avant le grand3