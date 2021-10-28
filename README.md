# Formulaire d'identification sécurisé
Formulaire d'identification sécurisé : 

M1 : Sécurité des systèmes d'informations – Session 1 – 2021/2022 – Christophe Villeneuve.

Dans le cadre de mes études , ce projet englobe la réalisation d'un formulaire de connection / inscription sécurisé.

# Languages utilisés : 
- HTML pour la structure des pages
- CSS pour la mise en forme
- JavaScript pour la vérification des inputs
- PhP pour la gestion (connextion à SQL) et la sécurisation (stripcslashes/ mysqli_real_escape_string / htmlspecialchars /password_hash) du site

# Le projet se compose de 2 pages HTML principales :
- /home.html la page d'acceuil ainsi que la page d'identification.
- /adduser.html la page d'inscription et d'ajout d'un nouveau compte.

Ce projet a été realisé à l'aide de XAMPP pour activer les modules Apache HTTP Server et MySQL localement.


# Tester
Pour faire fonctionner ce projet :
- Installer XAMPP : https://www.apachefriends.org/fr/download.html
- Activer les modules Apache HTTP Server et MySQL localement.
- Télécharger les fichiers du projet dans xampp/htdocs/projet
- Executer le fichier tlb_users.sql dans http://localhost/phpmyadmin/index.php?route=/database/sql&db=db_connect

La structure de la table 'tbl_users' sur PhpMyAdmin utilisée dans ce projet.


![alt text](https://github.com/YasserRabhi/form/blob/main/images/sql.PNG?raw=true)

- Lien vers la page principale : http://localhost/projet/adduser.html



# 
Pour faciliter l'utilisation, les identifiants de la base de données sont les valeurs par défaut. 

Username : 'root' /   Password : ''  


RABHI Yasser

N°étudiant : 21007053


Paris 8
