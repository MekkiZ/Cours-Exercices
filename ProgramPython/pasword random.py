import string
import random

def generatePassword(num):
    password =''

    for i in range(num):
        x = random.randint(0,74)
        password += string.printable[x]
    
    return password

print (generatePassword(50))
print('----------')

import Slugify
print(slugify.slugify('je suis mekki'))