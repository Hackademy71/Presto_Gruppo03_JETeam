<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You are a Revisor!</title>
</head>
<body>
    <h1>Complimenti, {{$user->name}}</h1>
    <p>gli admins di presto.it ti danno il benvenuto nella crew come: </p>
    <h2>Revisore!</h2>
    <p> Quello del revisore è un ruolo molto importante nella nostra community! </p>
    <p> `Segui il seguente regolamento: /n \n guarda i semafori /n \n leggi i dati dell'annuncio /n \n 
        /n \n accetta o rifiuta un annuncio /n \n tieni sott'occhio gli annunci che hai già accettato, potrebbero essere modificati 
        /n \n grazie e un caloroso benvenuto dal JETeam di` <a href="{{route('make.revisor', compact('user'))}}" class=""></a> Presto.it </p>
    <a href="{{route('make.revisor', compact('user'))}}" class="btn bgoutline3 ">Accedi alla tua area revisore </a>
</body>
</html>