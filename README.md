[![Code style: black](https://img.shields.io/badge/code%20style-black-000000.svg)](https://github.com/ambv/black)

# Classement
```
+--------------+-------------------+----------------------------------------------+-----------------+
| Name         |   Number of games | Scores                                       |   Average score |
+==============+===================+==============================================+=================+
| PIERRE-MARIE |                 2 | [5, 12]                                      |         8.5     |
+--------------+-------------------+----------------------------------------------+-----------------+
| REMI         |                13 | [14, 13, 2, 11, 5, 2, 6, 8, 15, 3, 8, 7, 10] |         8       |
+--------------+-------------------+----------------------------------------------+-----------------+
| JULIEN       |                 2 | [10, 5]                                      |         7.5     |
+--------------+-------------------+----------------------------------------------+-----------------+
| OLIVIER      |                 4 | [13, 3, 4, 2]                                |         5.5     |
+--------------+-------------------+----------------------------------------------+-----------------+
| CLEMENT      |                 8 | [-4, 4, 4, 15, 2, 4, 5, 12]                  |         5.25    |
+--------------+-------------------+----------------------------------------------+-----------------+
| JB           |                 5 | [9, 6, 4, -3, 10]                            |         5.2     |
+--------------+-------------------+----------------------------------------------+-----------------+
| BRUNO        |                 5 | [3, 3, 9, 7, 4]                              |         5.2     |
+--------------+-------------------+----------------------------------------------+-----------------+
| ANTOINE      |                13 | [7, 10, 4, -1, 1, 7, 7, 0, 5, -3, 8, 1, 18]  |         4.92308 |
+--------------+-------------------+----------------------------------------------+-----------------+
| THEODORE     |                 1 | [4]                                          |         4       |
+--------------+-------------------+----------------------------------------------+-----------------+
| AURORE       |                 2 | [0, -2]                                      |        -1       |
+--------------+-------------------+----------------------------------------------+-----------------+
| SEBASTIEN    |                 1 | [-1]                                         |        -1       |
+--------------+-------------------+----------------------------------------------+-----------------+
```

## Scripts
Pour mettre à jour les scores, les liens vers les csv doivent êtres dans le fichier scores.md. Ensuite :
```
rm -r csv
python getAllCsv.py
python process_csv.py csv/
```
TODO : ajouter requirements (il est temps de passer à pipenv)

# Règles

## Consensus

- Interdiction de jouer l'excuse au dernier pli (-2)
- Lorsque **l'excuse** apparaît dans les cartes dévoilés (à l'exception de lors de la dernière phase de jeu), le premier joueur à dire "la pire des cartes" doit l'échanger contre l'une de ses cartes, il est obligé de la jouer comme la pire carte. "Premier joueur" signifie premier à avoir commencé la phrase à condition de l'ennoncer correctement
- Toute faute de jeu peut être sanctionné, il suffit que quelqu'un signale la faute. Jouer une carte au mauvais moment, erreur de distribution, tout peut y passer
- Lorsque quelqu'un semble malhonnête dans ses pratiques, on peut l'accuser de **tentative d'embrouille**. L'assemblée se réunit pour décider de la validité de l'accusation. La peine générale est -1 mais peut être exceptionnellement plus importante en cas d'infraction grave (comme filmer avec son téléphone dans le mauvais sens)
- **L'assemblée** est constituée de tous les joueurs présents au sens large, les personnes faisant partie du tournoi global et assistant à la partie font automatiquement partie de l'assemblée, à l'excéption de l'accusé pour lequel l'assemblée est convoquée.
- A chaque phase de jeu, on découvre les *5-n* cartes du dessus du paquet (avec *n* le nombre de cartes dans la main), sauf à la dernière phase de jeu (carte sur le front), ou un découvre 2 cartes. --> L'idée est qu'à tout moment, on a l'information de 5 cartes pour prendre notre décision
- Après la phase d'annonces, chaque joueur peut choisir de **Poulper** (Ordre défini ci-dessous). Le cas échéant, les gains ou pertes du joueur à l'issue du tour sont *doublés*
- L'ordre de **Poulpage** : Le tour de poulpage se déroule juste après le tour d'anonces, et dans le sens contraire. Le premier joueur à poulper est le joueur se trouvant juste avant la dernière personne à avoir annoncé. Une fois le tour de poulpage terminé, le sens et l'ordre initiaux sont rétablis.
- Pour déterminer qui commence à distribuer au tout début d'une partie : on distribue une carte par joueur, le joueur ayant la plus *petite* carte commence à distribuer 

## En cours de consensus

- 

## Propositions 

- 



# Annexes 

## Attribution des points

## Nomenclature des événements de jeu

### Fautes de jeu (Aussi appelée **Une JB** )

#### Le joueur effectue une action au mauvais moment, ce n'est pas son tour: 
- Commence à distribuer
- Faire son annonce 
- Poser sa carte

#### Le joueur échoue dans la tâche qui lui incombe en tant que distributeur 
- Distribuer le mauvais nombre de cartes
- Retourner le mauvais nombre de cartes 
- Accidentellement révéler une carte d'un joueur



### Réussites, échecs et fourberies

- **La Royale Olivier** : Le joueur est le seul à gagner

- **La Lamentable Antoine** : Le joueur est le seul à perdre

- **La Perfide Julien** : Le joueur fait croire aux autres qu'il possède l'excuse par de viles méthodes de persuasion

- **L'incrédule Rémi** : Le joueur commence à exprimer sa rage car il pense avoir perdu, alors que non, en fait.

- **La JB** : Le joueur effectue un mouvement particulièrement mauvais de manière malencontreuse 

- **L'Optimale JB** : Le joueur gagne tous les tours d'une partie, en les poulpants tous. Il gagne ainsi le maximum de points possible par partie : 10
