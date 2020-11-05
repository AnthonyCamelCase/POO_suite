## association entre objets ##
****
*trois parties (association, composition et agrègation)*
**ici la partie 1** 
****
####sujet :
dans votre application vos differentes entitées communiquent entre elles.
permettant à des objets de manipuler d'autres objets.
ont dits souvent qu'elles communiquent par messages (un objet demande un traitement à un autre objet)
comment cella se materialise dans le code ?
****
####Use case:
* imaginons que vous avez un objet (instance de Humain) qui souhaiterais demarrer au autre objet (instance de voiture) *ne pas faire de difference entre ces termes*

<center>vous avez donc un objet qui demande une action a un autre objet (traduit quelles communiquent "message") ou bien q'un lien existent entre deux objets ("association")</center>

****

<center>humain -(demare)-> voiture</center>

****
cette association est un **couplage faible** car un objet humain peut exister sans un objet voiture et inversement.

par contre je mets une **contrainte supplementaire** (la voiture ne peut pas demarer sans un objet (humain) et inversement).Mais ceci reste un choix du programmeur resultant de sa comprehension faites par l'analyse du metier de l'application(autre sujet)

****
##diagramme représentant l'assiociation :
![imagediagramme](classUML(message).png)
