## composition ##
****
*trois parties (association, composition et agrègation)*
**ici la partie 2** 
****
####sujet :
il se pourrait bien que dans votre application vous ayez de(s) objet(s) qui soit des composite d'autre autre objet (composition)
et que ce(s) composite(s) ne puisse pas existez sans l'objet composition.
du coup cette association est par sa nature : un **couplage trés fort**

****
####Use case:
* imaginons que vous avez un objet (instance de Voiture) est composer d'un objet (instance de Moteur) conciderant que une voiture ne peux exister sans moteur.
donc la destruction de la voiture engendra la destruction du moteur


****

<center>Voiture -(has a)-> Moteur</center>

****
ne pas confondre avec l'heritage cela peut amener à une mauvaise utilisation 
*astuce :*
has a (composition)
is a (heritage)
voiture pourrais heriter d'un class moyen de transport par exemple **by the way** l'heritage est un couplage trés trés fort plus que la composition.

****
##diagramme :
![imagediagramme](classUML(composition).png)
