import turtle
playerScore1 = 0
playScore2 = 0

window= turtle.screen()
window.title('Ping Pong')
window.bgcolor('red')

window.setup(width=800, height=600)
window.tracer(0)

#rackete gauche
racketteG=turtle.Turtle()
racketteG.speed(0)
racketteG.shape("classic")
racketteG.color('blue')
racketteG.shapesize(5,2)
racketteG.penup()
racketteG.goto(-360,0)




#rackete droite

racketteD=turtle.Turtle()
rackettteD.speed(0)
racketteD.shape("classic")
racketteD.color('white')
racketteD.shapesize(5,2)
racketteD.penup()
racketteD.goto(360,0)


#creation de la balle

balle=turtle.Turtle()
balle.speed(1)
balle.color('black')
balle.goto(5,5)
balle.penup()
ballexdirection=0.2
balleydirection=0.2
balle.shape('circle')


def racketteDhaut():
    y=racketteD.ycor()
    y=y-90
    racketteD.set(y)


def racketteDbas():
    y=racketteD.ycor()
    y=y+90
    rakcetteDhaut.set(y)


def racketteGbas()
    y=racketteG.ycor()
    y=y-90











