Il faut maintenant créer notre base de donnée. 




**THEORIE**

J'utilise dans cet exemple phpMyadmin en local grâce à xamp pour créer rapidement et de facon visuelle ma base de donnée

Xamp : 
![alt text](/public/images/readme/xamp.png)

Myadmin :
![alt text](/public/images/readme/myadmin.png)

Choisir le nom dela base de donnée, son moteur
...

Créer une table user avec 3 colonnes
![alt text](/public/images/readme/tableuser.png)

Comme d'hab, dans notre table un champ id en primary key, un username en varchar de 100 et un password varchar de 100 (ne pas oublier de ne pas mettre le meme nom que votre table(bête mais erreur perso )) :

![alt text](/public/images/readme/champs.png)


enregistrer

- 5ème étape :

Il faut maintenant établir une connexion à notre base de donnée crée.


**THEORIE**

Pour se connecter à notre base de donnée il faudra donc créer un nouveau PDO.