import matplotlib.pyplot as plt
import requests as r
import json
import numpy as np


x_valeur=[]
y_valeur=[]


reponse= r.get('https://opendata.paris.fr/api/records/1.0/search/?dataset=statistiques_de_creation_d_actes_d_etat_civil_par_mois&q=&rows=50&sort=-annee&facet=type_d_acte&facet=date&facet=annee&refine.type_d_acte=Naissances&exclude.type_d_acte=Reconaissance')

donner= reponse.json()

for i in range(len(donner['records'])):
    anner= donner['records'][i]['fields']['date']
    nb=  donner['records'][i]['fields']['nombre']

    x_valeur.append(anner)
    y_valeur.append(nb)
    
print(x_valeur)

plt.plot(x_valeur, y_valeur, color="green")
plt.xlabel("anner") # Légende à X
plt.ylabel("Nb") # Légende pour Y
plt.xticks(rotation='vertical') 
plt.ylim(ymin=3000) # On commence le Y par 15

# On ajoute un titre et on modifie sa taille
titre = plt.title('naissance paris')
titre.set_fontsize(7)


# On affiche notre chart avec toutes ses configurations
plt.show()


#second Graphe avec barres horizontal

np.random.seed(19680801)


plt.rcdefaults()
fig, ax = plt.subplots()

# Example data

y_pos = np.arange(len(x_valeur))
performance = y_valeur

ax.barh(y_pos, performance, align='center')
ax.set_yticks(y_pos)
ax.set_yticklabels(x_valeur)
ax.invert_yaxis()  # labels read top-to-bottom
ax.set_xlabel('Nombres')
ax.set_title('Combien de naissance')

plt.show()
