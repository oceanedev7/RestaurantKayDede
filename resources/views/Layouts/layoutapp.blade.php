<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
  <title>@yield('title')</title>
</head>

<body>


<nav class="h-screen w-full bg-black">
    
    <div>@yield('photo')</div>
{{-- <img class="h-screen w-full opacity-25" src="{{ Storage::url('images/photo.jpg') }}" alt=""> --}}

    <div class="flex flex-row absolute top-0">
        <img class="h-32 w-32 relative left-16" src="{{ Storage::url('images/logo.png') }}" alt="">

    <div class="text-white font-bold text-lg relative left-44 top-16 flex flex-row"> 
        <div class="space-x-20 mr-12">
        <a href="{{route ('accueil')}}">Accueil</a>
        <a href="{{route ('notrecarte')}}">Notre carte</a>
        </div>
        <div class="space-x-4"> 
        <a class="bg-beige font-extrabold rounded-lg px-4 py-2" href="">Réserver une table</a>
        <a class="bg-beige font-extrabold rounded-lg px-4 py-2" href="">Commander en ligne</a>
        <a class="bg-beige font-extrabold rounded-lg px-4 py-2" href="{{route ('contactez-nous')}}">Contact</a>
        </div>
    </div>
    </div>

</nav>

<main>
  @yield('content')
</main>

<footer class="h-32 bg-gris-fonce flex flex-col text-white justify-center items-center space-y-2">

<div class="text-lg font-bold">KAY DEDE</div>
<div class="text-lg space-x-6">
  <a href=""><i class="fa-brands fa-facebook"></i></a>
  <a href=""><i class="fa-brands fa-instagram"></i></a>
  <a href=""><i class="fa-brands fa-x-twitter"></i> </a>
</div>
<div>
  Copyright ©  2024 - Tous droits réservés - 
  <a class="text-beige font-bold" href="">Mentions légales</a>
  
</div>


</footer>



<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>