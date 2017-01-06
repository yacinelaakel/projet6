# README  PROJET 6 #

# Bonnes pratique à avoir avec git #
Installation du projet : git clone adresse-du-projet .
Si vous êtes vraiment perdu sur vos branches ou que votre travail est complétement destructuré, supprimez le projet de votre disque et refaite un git clone.

## Une fois le git clone réalisé et que vous voulez travailler : ## 
### - Ne pas travailler sur la branche **master**. ###
### - Créer une branche **dev** (git checkout -b dev), créer une nouvelle branche depuis cette dernière (ex : git checkout -b user), faire ses commit ###
### - Une fois le travail terminé sur une branche, la merge dans la branche **dev** (ex : git checkout dev + git merge user) ###
### - Push sur le bitbucket la branche **dev** (git push)###
### - Créer une pull request pour que les autres valident le travail qui a été fait et qu'il soit fusionné dans la branche master. Sinon vous pouvez merge dev dans master (git checkout master + git merge dev) et push master###

## Si vous voulez récupérer un travail: ##
### - Mettez vous sur votre branche master et récupérez le travail qui a été fait en faisant git pull. Vous aurez ainsi les dernières modifications qui ont été faite. Se reférer au paragraphe du dessus pour travailler. ###

## Si vous êtes coincés sur un travail et que vous voulez que quelqu'un travail sur votre branche : ## 
### Supposons que vous êtes sur une branche design et que vous êtes bloqué. Faites un commit, pusher votre branche. La personne qui va récupérer cette branche devra se placer dessus dans sa console (git checkout branche_a_recuperer) puis devra pull (git pull). Ensuite une fois le problème résolu il suffit de faire comme si c'était un travail normal (se référer au premier paragraphe.)  ###

#TEAM PROJET 6 

* DEV  SYLVIE PAITRE PARCOURS CdP Dev
* DEV   JONATHAN CASSARA-GOHIER   PARCOURS CdP Dev
* DEV YACINE LAAKEL PARCOURS CdP Dev
* MARKETER    TOUFIC HAMDANI   PARCOURS CdP MAK


********************************************

ENTREPRISE WEBNET+ 

CLIENT . :  Michel Dujardin est le fondateur de l’association NAO (Nos Amis les Oiseaux)