## agrègation ##
****
*trois parties (association, composition et agrègation)*
**ici la partie 3** 
****
####sujet :
il se pourrait bien que dans votre application vous ayez de(s) objet(s) qui soit de(s) agregé(s) d'un objet (agregat).
la diffèrence est qu'ils ne dépend pas de la l'agregat pour vivre. 
La destrucion de l'objet agregat n'affecte pas le(s) agrégés contrairement au composition
du coup cette association est par sa nature : un **couplage moyen**

****
####Use case:
* imaginons que vous avez un objet (instance de Voiture) "notre agrégat" et vous avez differents objets (instance de Destination) celle-ci composerais une liste d'arret pour le vehicule (dans la class Voiture)
la suppression de la voiture ne detruit pas les objets desinations (juste la sa propre liste de stop)

****

<center>Destination -(stop[array])-> Voiture</center>

****
**bonus :**
function delStop() permettant de suprimer un index precis dans un tableau correspondant à une valeur
****
##diagramme :
![imagediagramme](classUML(agrégation).png)
