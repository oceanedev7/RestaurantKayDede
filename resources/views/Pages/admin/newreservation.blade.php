<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouvelle réservation</title>
</head>
<body>

    <div> Nouvelles Réservations </div>

    <div> 
        @foreach ($reservations as $reservation)

        <div>{{$reservation->nom}}</div>
        <div>{{ \Carbon\Carbon::parse($reservation->date)->format('d-m-Y') }}</div>
        <div>{{ \Carbon\Carbon::parse($reservation->heure)->format('H:i') }}</div>
        <div>{{$reservation->nombre_personne}}</div>
        <div>{{$reservation->commentaires}}</div>
            
        @endforeach


    </div>
    
</body>
</html>