# fomration php OOP - Ghezal Ilies

Si vous utilisez docker
- faites un nouveau dossier sur votre machine

Si vous utilisez Wamp
- allez dans le dossier où sont les sources c:/wamp/

--------

Objectif : Créer une battle avec des personnages

1/ Première étape créer les classes vides

- créer un fichier index.php (http://localhost)
- créer une classe Battle
- créer une classe Wizard
- créer une classe Warrior
- créer une classe Fairy
- créer une classe Human

2/ Remplir classe Battle

- constructeur
- un tableau de joueurs (un jour c'est un personnage)
- méthode fight

3/ Remplir nos classes de personnages

- un constructeur
- passer des armes
- initialiser ses points de vies
- définir sa force
- définir son nom
- définir son pouvoir de damage
- méthode take damage (perd des points de vies)
- force
- point de vie

4/ Factoriser et de créer une classe Character mère des personnages

- modifier les classes de personnage pour étender la classe mère
- définir ses points de vie
- définir sa force
- définir son pouvoir de damage
- définir une méthode pour retourner son nom
- est-il encore en

5/ Définir une interface

- Player est un personnage qui peut jouer
- Living peut vivre (faire une méthode isAlive que tout character va avoir)
- Opponent (définir les méthodes qu'un opposant doit avoir, celui qui reçoit le coup)
- Fighter (définir les méthodes qu'une attaque doit avoir, celui qui tape )
- MayDie (définie la méthode lorsqu'il meurt)

6/ Créer un fichier composer.json et le compléter pour l'autoload

```docker run --rm -v $(PWD):/app composer install```

7/ Remplir les take damages

- soustraire le damage de la vie du personnage
- vérifier que le damage qui va être appliqué n'est pas supérieur à la vie actuelle du personnage
- si supérieur, retourner une exception qui indique qu'il est mort

8/ Pour Battle

- créer un paramètre contenant les personnages encore en vie
- regrouper les personnages par groupe
- appeler le méthode fight sur index.php
- lister les joueurs qui sont dans l'arène
- lancer le jeu (donc méthode pour lancer le jeu)
- lancement du jeu
- vérifier que les groupes ont encore des survivants

9/ Bataille finale

- Faire une boucle sur les players d'un même groupe dans round
- un player attaque un autre player aléatoirement (mais pas lui même)
- take damage pour diminuer la vie
- A la fin de la bataille lister les vainqueurs de chaque groupe
----

Lancer le jeu

```docker run -v $(PWD)/src:/var/www/html -p 8000:80 --rm php:apache```
- Rendez-vous sur http://localhost:8000
----

refresh autoloader ```docker-compose run composer dump-autoload -o```
