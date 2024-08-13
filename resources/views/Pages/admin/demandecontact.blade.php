<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">  
</head>
<body>

    <div> Demande de contact </div>

    @foreach ($contacts as $contact)
    
    <div>{{$contact->nom}}</div>
    <div>{{$contact->email}} </div>
    <div> {{$contact->sujet}}</div>
    <div>{{$contact->message}}</div>
    
    @endforeach
    
</body>
</html>