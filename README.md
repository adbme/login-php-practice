# php practice 1 / login


- Mini login to the portal of my projects

![alt text](/public/images/logoIcon.png)


## étapes
- 1ère étape : 
créer le front end 


- 2ème étape :

Dans le form mettre la méthode **post** et dans l'action mettre le chemin du login : 

``` PHP
<form method="POST" action="/login.php">
```
**THEORIE**

Une méthode ça permet d'envoyer des données depuis l'html un form par exemple au coté serveur donc au PHP. 

La methode post est utilisé dans mon cas pour la soumission de donnée, par exemple soumettre le formulaire.

Si j'avai fait avec get, les données seraient visible dans l'url du site et c'est donc de la récupération de donnée contrairement a la soumission. 

![alt text](/public/images/readme/get.png)


- 2ème étape :

pour vérifier que le boutton submit fonctione bien, dans  login php on va faire une condition et echo un message :

``` PHP
if (isset($_POST['submit']))
{
    echo "ça marche";
}
```

**THEORIE**
La fonction isset va voir si la variable est définie ou non null (clikée ou pas dans cet exemple)

si elle est définie elle retourne un true et si elle est non null un false.

Elle va vérifier si le boutton "submit" a bien été cliqué par l'intérmédière de la variable POST qui se crée quand on fait la method post dans le form.

La variable post avec comme name submit dans cet exemple.

ça veut dire que nimporte quel boutton ayant comme name submit affichera un "ça marche".

- 3ème étape :

Toujours dans la meme condition tester si les inputs marchent bien avec un bon name "username" et "password" :

``` PHP
$username = ($_POST['username']);
    $password = ($_POST['password']);

    echo "Le username est : "  .$username;
    echo "Votre mot de passe ultra sécur est : " .$password;
```
**THEORIE**

Perso je vois ce code comme en js, comme des variables qui stockent l'id de notre élément sauf qu'en php on concatènne avec un "." a la place d'un "+".

Comme prévu le résultat est le suivant : 

![alt text](/public/images/readme/result.png)

- 4ème étape :



