# Dépôt de test

Dépôt dont l'objectif est d'étudier GIT & GitHub en fin de première année SIO.

# En route vers la v2.0.0

Un mini starter kit maison a été installé. Il prend en charge les principales pages <u>actuellement développées</u>, mais il faut terminer toute son intégration. Ce sera l'objet de cette nouvelle version. Voci quelques ogjectifs :

- utiliser des routes dynamiques (via AltoRouter),
- créer une administration des collaborateurs,
- mettre en place nos notions de MVC,
- mettre en place un template pour les vues,
- ...

Vu toutes les tâches de la roadmap (ci-dessous) à réaliser, nous allons nous partager le travail et nous pousserons nos solutions via des _pullRequest (PR)_ dans une branche __origin v2.0.0__ sur le dépôt principal https://github.com/lucp-slam/exempleslam2025. Quand tous les points de la roadmap seront réalisés, nous pourrons pousser cette v2 sur _origin main_.

## Roadmap

Afin de mettre en place cette nouvelle version, voici la liste des tâches à réaliser :

- **RM-A** : Faire un CRUD pour chacune des fiches des collaborateurs *(2 personnes)* ;

- **RM-B** : Faire une zone admin (user/mdp). Une fois connecté, la route _admin_index_ listera l'ensemble des collaborateurs. Pour chacun d'entre eux, un système de lien permettra d'accéder aux différentes parties du CRUD développé au _RM-A_ *(3 personnes)* ;

- **RM-C** : Les pages "A propos" et "Contactez-nous" ne s'incluent pas correctement dans le design global du site (celui de la *home* : header, footer, nav...). Il faut fixer ça et vérifier qu'à tout moment <u>toutes</u> les pages du site soient correctement designées *(1 personne)* ;

- **RM-D** : La page "Venez nous voir" tombe en erreur : il faut fixer ça et afficher une carte openStreetMap avec la librairie [LaefletJS](https://nouvelle-techno.fr/articles/inserer-une-carte-openstreetmap-sur-votre-site-reactualise) *(1 personne)* ;

- **RM-E** : La page "Contactez-nous" devrait afficher un _formulaire de contact_ qui persiste chaque message laissé en BD *(2 personnes)*.

## Les contraintes

1. Les routes doivent être _RESTFul_.
2. Dans _/database/_, chacun doit compléter le fichier de migration selon ses besoins.
3. Tous les scripts PHP doivent respecter [PSR12](https://www.php-fig.org/psr/psr-12/) (pensez à [laravel/pint](https://packagist.org/packages/laravel/pint)).
4. Essayez de respecter les standards des messages de commit (Cf cette [petite doc](https://cbea.ms/git-commit/)) ; Les messages de commits doivent décrire **<u>clairement</u>** les raisons de chaque modification du code. Il faut faire en sorte qu'à la lecture de chacuns d'entre eux, on puisse "*raconter une histoire*"...
5. La config de la BD devra être définie dans */config/app.php* sur le modèle de du fichier */config/app.dist.php*.
6. Travaillez selon le [_github flow_](https://docs.github.com/fr/get-started/using-github/github-flow) basé sur la branche *v2.0.0* (Cf. doc [GitHub flow vs Git flow](https://medium.com/@yanminthwin/understanding-github-flow-and-git-flow-957bc6e12220)).

## À vous de jouer

- **Cameron** : Tu as été assigné (seul ou en équipe) à la tâche **RM-B**.
- **Ethan E** : Tu as été assigné (seul ou en équipe) à la tâche **RM-A**.
- **Ethan F** : Tu as été assigné (seul ou en équipe) à la tâche **RM-A**.
- **Guillaume** : Tu as été assigné (seul ou en équipe) à la tâche **RM-B**.
- **Léo D** : Tu as été assigné (seul ou en équipe) à la tâche **RM-E**.
- **Léo F** : Tu as été assigné (seul ou en équipe) à la tâche **RM-B**.
- **Lucie** : Tu as été assignée (seule ou en équipe)à la tâche **RM-C**.
- **Mathis** : Tu as été assigné (seul ou en équipe) à la tâche **RM-D**.
- **Théo** : Tu as été assigné (seul ou en équipe) à la tâche **RM-E**.

## Quelques ressources

* PSR12 :
  * [PSR12](https://www.php-fig.org/psr/psr-12/),
  * [laravel/pint](https://packagist.org/packages/laravel/pint),
* Les messages de commit :
  * [Comment écrire les messages de commit](https://cbea.ms/git-commit/),
* Les flows
  * [Documentation de GitHub sur le github flow](https://docs.github.com/fr/get-started/using-github/github-flow),
  * [Comparaison entre GitHub flow et Git flow](https://medium.com/@yanminthwin/understanding-github-flow-and-git-flow-957bc6e12220),
* Généralités
  * [Tips : Concepts du contrôle de version avec Git - YouTube](https://www.youtube.com/watch?v=Uszj_k0DGsg),
  * [Petits cours avancés sur Git - YouTube](https://www.youtube.com/playlist?list=PLyCj4RCToz5DRDx3sJ4iW9i8D2G8OdHYH),
  * [Tips : Comment défaire des bêtises - YouTube](https://www.youtube.com/watch?v=lX9hsdsAeTk),
* Tools
  * [Conflicts tools](https://blog.xoxzo.com/2019/03/29/my-favorite-tools-to-resolve-git-merge-conflicts/),