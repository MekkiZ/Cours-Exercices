
import turtle

#Joueur1= 0
#Joueur2 = 0

affichage= turtle.Screen()
affichage.title('Ping affichage')
affichage.bgcolor('white')
affichage.setup(width=800, height=600)
affichage.tracer(1)

#rackete gauche
racketteG=turtle.Turtle()
racketteG.speed(0)
racketteG.shape("square")
racketteG.color('blue')
racketteG.shapesize(stretch_wid=5, stretch_len=2)
racketteG.penup()
racketteG.goto(-400,0)




#rackete droite

racketteD=turtle.Turtle()
racketteD.speed(0)
racketteD.shape("square")
racketteD.color('red')
racketteD.shapesize(stretch_wid=5, stretch_len=2)
racketteD.penup()
racketteD.goto(400,0)


#creation de la balle

balle=turtle.Turtle()
balle.speed(40)
balle.color('black')
balle.goto(0,0)
balle.penup()
balle.dx=5
balle.dy=-5
balle.shape("circle")



def racketteDhaut():
    y=racketteD.ycor()
    y+=20
    racketteD.sety(y)


def racketteDbas():
    y=racketteD.ycor()
    y-=20
    racketteD.sety(y)


def racketteGhaut():
    y=racketteG.ycor()
    y+=20
    racketteGhaut.sety(y)

def racketteGbas():
    y=racketteG.ycor()
    y-=20
    racketteG.sety(y)


#association des touches

affichage.listen()
affichage.onkeypress(racketteDhaut, "e")
affichage.onkeypress(racketteDbas, "x")
affichage.onkeypress(racketteGhaut, "Up")
affichage.onkeypress(racketteGbas, "Down")


#boucle infinie
while True:
    
    affichage.uptade()
    
    balle.setx(balle.xcor()+ballexdirection)
    balle.sety(balle.ycor()+balleydirection)

    if balle.ycor() > 290 :
        balle.sety(290)
        balleydirection=balleydirection*-1
     
    if balle.ycor()<-290:
        balle.sety(-290)
        balleydirection=balleydirection*-1
    
    if balle.xcor()>400:
        #balle.setx()<400
        balle.goto(0, 0)
        ballexdirection=ballexdirection
        Joueur1=Joueur1+1

    if balle.xcor()<-400:
        #balle.setx()<400
        balle.goto(0, 0)
        ballexdirection=ballexdirection
        Joueur2=Joueur2+1
    if(balle.xcor()> 360 and balle.xcor()<370) and (balle.ycor()<racketteD.ycor()+40 and balle.ycor()>racketteD.ycor()-40):
        balle.setx(360)
        ballexdirection=ballexdirection*-1
    
    if(balle.xcor()< -360 and balle.xcor()>-370) and (balle.ycor()<racketteG.ycor()+40 and balle.ycor()>racketteG.ycor()-40):
        balle.setx(-360)
        ballexdirection=ballexdirection*-1

turtle.mainloop()







