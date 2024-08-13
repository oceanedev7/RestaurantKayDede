@extends('layouts.layoutapp')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('content')

    <div class="py-8 bg-blanc-casse md:py-16">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
          <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
            <div class="max-w-md lg:max-w-lg mx-auto mt-10">
                <img src="{{ Storage::url($produit->photo) }}" alt="">
            </div>
    
            <div class="mt-6 sm:mt-8 lg:mt-0 mr-20">
              <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                {{$produit->nom}} 
                <span class="text-xl font-bold">( {{$produit->taille}} )</span>
              </h1>
              <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                  {{$produit->prix}}
                </p>
    
    
              </div>
    <hr class="my-6 md:my-8 border-black"/>
    
              <p> {{$produit->description}}</p>
    
              <p class="mt-6">
                <span class="font-bold"> INGREDIENTS : </span>
            <p>{{$produit->ingredients}} </p>

              <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                <a href="#" class="flex items-center justify-center py-2.5 px-5 text-sm font-bold bg-beige text-white font-extrabold rounded-lg ">
                 Commander en ligne
                </a>
              </div>
    
            </div>
          </div>
        </div>
    </div>

    @endsection

</body>
</html>