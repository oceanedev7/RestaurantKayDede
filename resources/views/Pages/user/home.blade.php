@extends('layouts.layoutapp')
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

    @section('title', 'Accueil')

    @section('photo')
    <img class="h-screen w-full opacity-30" src="{{ Storage::url('images/pizzaaccueil.jpg') }}" alt="">
    @endsection
    

    
    @section('content')

    <div class="p-12 bg-blanc-casse"> 

    <div class="flex flex-col"> 
        
            <span class="font-serif italic text-beige text-6xl ml-16">Découvrez</span>
            <span class="font-extrabold relative bottom-6 z-10 text-5xl">NOTRE HISTOIRE </span> 
            
            <div class="text-justify"> 
            Nous mettons à l'honneur les saveurs de notre île en vous proposant des pizzas uniques, préparées avec des farines locales 
            telles que la farine de manioc, la farine de fruit à pain ou encore la farine de patate douce.
            Nous croyons en une cuisine authentique, riche en traditions et en goûts. 
            Chaque pizza est une invitation à découvrir ou redécouvrir les trésors culinaires de notre terroir, en alliant créativité et savoir-faire local.
            Nous nous engageons à utiliser des ingrédients de qualité, issus de producteurs martiniquais, pour vous offrir une expérience gustative inégalée.
            Venez partager un moment convivial et savoureux dans une ambiance chaleureuse,
            où la passion pour la cuisine locale se mêle à l'amour de la pizza. 
            Que vous soyez amateur de classiques revisités ou à la recherche de nouvelles sensations, vous trouverez chez Kay Dédé la pizza qui saura ravir vos papilles.
            </div>

    </div>

        <div class="flex flex-col space-y-6 items-end">
            <img class="rounded-lg h-72 w-72 transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-gray-400" src="{{ Storage::url('images/pizzaiolo.jpg') }}" alt="">
            <img class="rounded-lg h-72 w-72 transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-gray-400" src="{{ Storage::url('images/pizzaspeciale.jpg') }}" alt="">
        </div>
    </div>

<div class="h-screen w-full bg-blanc-casse flex items-center ">
    <img class="rounded-lg w-[700px]" src="{{ Storage::url('images/farine.jpeg') }}" alt="">
    <div class="bg-beige z-10 w-[500px] h-96 rounded-lg relative right-32">
        
    </div>

</div>

<div class="h-[500px] w-full bg-black ">

    <div> 
        
    <img class="h-[500px] w-full opacity-25" src="{{ Storage::url('images/reservation.jpg') }}" alt="">

    <div class="z-10 text-white flex flex-col justify-center items-center relative bottom-72 space-y-6"> 
      
        <span class="text-6xl font-black"> RÉSERVER UNE TABLE </span>
        <button class="bg-beige text-xl font-extrabold rounded-lg px-6 py-2 "> Je réserve </button>
       
    </div>  
    
   
    
    </div>


</div>


    @endsection
</body>
</html>