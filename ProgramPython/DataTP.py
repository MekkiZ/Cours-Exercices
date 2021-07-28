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

'''    
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


#Graph pris dans la documentation de matplotlib

np.random.seed(19680801)


plt.rcdefaults()
fig, ax = plt.subplots()

#parti Data

y_pos = np.arange(len(x_valeur))
performance = y_valeur

ax.barh(y_pos, performance, align='center', height=2)#parti ou on config les barre horizontal
ax.set_yticks(y_pos)#position 
ax.set_yticklabels(x_valeur)
ax.invert_yaxis()  # labels read top-to-bottom
ax.set_xlabel('Nombres')
ax.set_title('Combien de naissance')

plt.show()
'''


names = x_valeur
values = y_valeur

fig, axs = plt.subplots(1, 3, figsize=(9, 3), sharey=True)
axs[0].bar(names, values)
axs[1].scatter(names, values)
axs[2].plot(names, values)
plt.xticks(rotation='vertical') 
fig.suptitle('Naissance à Paris')
plt.ylim(ymin=3000) # On commence le Y par 15
plt.show()
