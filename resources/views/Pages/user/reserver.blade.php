@extends('layouts.layoutapp')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

 <body>

    @section('title', 'Réserver une table')

    @section('photo')
    <img class="h-screen w-full opacity-40" src="{{ Storage::url('images/reserver.jpg') }}" alt="">
    <div class="flex flex-row justify-center">
    <div class="text-white absolute bottom-60 text-6xl font-black"> RÉSERVER UNE TABLE </div>
    </div>
    @endsection

    @section('content')

    <div class="flex items-center justify-center p-12">
        <div class="w-full max-w-lg p-12 rounded-lg shadow-2xl bg-white shadow-[0px_15px_30px_rgba(0,0,0,0.3)]">

            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg ">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif
        
            <form action="{{route ('reserver')}}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-beige font-semibold">Nom</label>
                    <input type="text" name="nom" placeholder="Votre nom" class=" w-full p-3 mt-1 border border-beige rounded-lg focus:outline-none focus:ring-2 focus:ring-beige" required>
                </div>
    
                <div>
                    <label for="date" class="block text-beige font-semibold">Date</label>
                    <input type="date" name="date" class="w-full p-3 mt-1 border border-beige rounded-lg focus:outline-none focus:ring-2 focus:ring-beige" required>
                </div>
    
                 <div>
                    <label for="time" class="block text-beige font-semibold">Heure</label>
                    <input type="time" name="heure" class="w-full p-3 mt-1 border border-beige rounded-lg focus:outline-none focus:ring-2 focus:ring-beige" required>
                </div> 
    
                <div>
                    <label for="people" class="block text-beige font-semibold">Nombre de personnes</label>
                    <input type="number" name="nombre_personne" min="1" placeholder="Nombre de personnes" class="w-full p-3 mt-1 border border-beige rounded-lg focus:outline-none focus:ring-2 focus:ring-beige" required>
                </div>
    
                <div>
                    <label for="message" class="block text-beige font-semibold">Commentaire</label>
                    <textarea name="commentaires" rows="4" placeholder="Laissez un commentaire... (Optionnel)" class="w-full p-3 mt-1 border border-beige rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-beige"></textarea>
                </div>
    
                <button class=" bg-beige w-full py-3 mt-4 font-bold text-white rounded-lg">Réserver</button>
            </form>
        </div>
    </div>

    @endsection
    
</body> 
</html>