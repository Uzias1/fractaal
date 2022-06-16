<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/slate/bootstrap.css">
    <title>Fractal - AL</title>
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>

    <py-env>
        - matplotlib
    </py-env>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Proyecto Algebra Lineal - Fractal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="https://matricesalescom.herokuapp.com/index.jsp">Ejercicio anterior</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid" id="container">
        <div class="row">
            <div class="col">
                <center><h1>Grafica del fractal</h1></center>
            </div>
        </div>
    </div>
    <center>
    <div id="grafic">

    </div></center>
    <py-script output="grafic" >
from random import randint
import matplotlib.pyplot as plt 
fig, ax = plt.subplots()

x=[]
y=[]
v=[2,0]

def multmat(a,v):
    x1=((a[0]*v[0])+(a[1]*v[1]))
    y1=((a[2]*v[0])+(a[3]*v[1]))
    vm=[x1,y1]
    return vm

def sumavect(v1,v2):
    x1=(v1[0]+v2[0])
    y1=(v1[1]+v2[1])
    vs=[x1,y1]
    return vs

def f1(v):
    m1=[0.75,0.03,-0.07,0.7]
    v1=[10,150]
    return sumavect(multmat(m1,v),v1)

def f2(v):
    m1=[-0.15,0.51,0.5,0.15]
    v1=[10,40]
    return sumavect(multmat(m1,v),v1)

def f3(v):
    m1=[0.2,-0.25,0.21,0.4]
    v1=[30,150]
    return sumavect(multmat(m1,v),v1)

def f4(v):
    m1=[0.02,-0.05,0.03,0.2]
    v1=[10,1]
    return sumavect(multmat(m1,v),v1)

def fnrdm(v):
    r=randint(1,4)
    if(r==1):
        v=f1(v)
        return v
    if(r==2):
        v=f2(v)
        return v
    if(r==3):
        v=f3(v)
        return v
    else:
        v=f4(v)
        return v

for i in range(0,99999):
    v=(fnrdm(v))
    x.append(v[0])
    y.append(v[1])


plt.scatter(x, y, s=4, c='green')
plt.xlabel("X")
plt.ylabel("Y")
plt.title("abeto fractal")

fig
    </py-script>

      <footer class="bg-light text-center text-lg-start " style="fixed: bottom;">
        <div class="text-center p-3" style="background-color: rgba(255, 255, 255, 0.2)">
         Equipo de trabajo: García Lucero Uzías & Gonzales Manzano Leonardo &nbsp;&nbsp;&nbsp;&nbsp;   Grupo: 2CM3
        </div>
      </footer>
</body>
</html>