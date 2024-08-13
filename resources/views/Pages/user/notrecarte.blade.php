@extends('layouts.layoutapp')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
</head>
<body>

    @section('title', 'Notre Carte')

    @section('photo')
    <img class="h-screen w-full opacity-30" src="{{ Storage::url('images/notrecarte.jpg') }}" alt="">
    <div class="flex flex-row justify-center">
        <div class="text-white absolute bottom-60 text-6xl font-black"> NOTRE CARTE </div>
        </div>
    @endsection

    @section('content')

   <div class="text-center p-8 text-beige text-3xl font-extrabold"> NOS PIZZAS </div>
        
    <div class="grid grid-cols-4 gap-12 p-8 justify-center" >

        @foreach ($pizzas as $pizza)
        
        <a href="{{route('produit', $pizza->id)}}" class="w-60 h-74 bg-gris-fonce p-5 flex flex-col gap-1 rounded-lg hover:bg-beige">
            <div class="h-48">
                <img src="{{ Storage::url($pizza->photo) }}" alt="">
            </div>

            <div class="flex flex-col gap-4">  
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

                <div class="flex flex-col items-end">
                   <i data-tooltip-target="tooltip-left1" data-tooltip-placement="left" class="fa-solid fa-circle-info text-white text-xl mt-2 mr-2 text-white"></i>
                </div>
                <div id="tooltip-left1" role="tooltip" class="max-w-44 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg  opacity-0 tooltip ">
                    100 grammes de cet aliment représentent une valeur énergétique de 236 calories ou kilocalories (ou 988 kilojoules).
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

              <div class="flex flex-row justify-between">
                <span class="text-xl text-white font-bold">{{$pizza->nom}}</span>
                {{-- <span class="text-xl text-white font-bold">{{$pizza->taille}}</span> --}}
                <span class="text-xl font-bold text-white">{{$pizza->prix}}</span>
              </div>
            </a>
        @endforeach

        </div>
    </div>

    <div class="text-center p-6 text-beige text-3xl font-extrabold"> NOS DESSERTS </div>
        
    <div class="grid grid-cols-4 gap-12 p-8 justify-center" >

        @foreach ($desserts as $dessert)

        <a href="{{route('produit', $dessert->id)}}" class="w-60 h-74 bg-gris-fonce p-5 flex flex-col gap-1 rounded-lg hover:bg-beige">
            <div class="h-48">
                <img src="{{ Storage::url($dessert->photo) }}" alt="">
            </div>

            <div class="flex flex-col gap-4">  


    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
                <div class="flex flex-col items-end">
                   <i data-tooltip-target="tooltip-left2" data-tooltip-placement="left" class="fa-solid fa-circle-info text-white text-xl mt-2 mr-2 text-white"></i>
                </div>
                <div id="tooltip-left2" role="tooltip" class="max-w-44 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg  opacity-0 tooltip ">
                    100 grammes de cet aliment représentent une valeur énergétique de 136 calories ou kilocalories (ou 573 kilojoules)
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>


              <div class="flex flex-row justify-between">
                <span class="text-xl text-white font-bold">{{$dessert->nom}}</span>
                <span class="text-xl font-bold text-white">{{$dessert->prix}}</span>
              </div>
            </a>
            @endforeach
        </div>
    </div>

    <div class="text-center p-6 text-beige text-3xl font-extrabold"> NOS BOISSONS </div>
        
    <div class="grid grid-cols-4 gap-12 p-8 justify-center" >
        @foreach ($boissons as $boisson)

        <div class="w-60 h-74 bg-gris-fonce p-5 flex flex-col gap-1 rounded-lg hover:bg-beige">
            <div class="h-48">
                <img src="{{ Storage::url($boisson->photo) }}" alt="">
            </div>

            <div class="flex flex-col gap-4">  

    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
                <div class="flex flex-col items-end">
                   <i data-tooltip-target="tooltip-left3" data-tooltip-placement="left" class="fa-solid fa-circle-info text-white text-xl mt-2 mr-2 "></i>
                </div>
                <div id="tooltip-left3" role="tooltip" class="max-w-44 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg  opacity-0 tooltip ">
                    Les sucres présents sont donc les sucres naturels provenant directement des fruits utilisés. Il s’agit alors d’un mélange naturel de glucose, de fructose et de saccharose.
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

              <div class="flex flex-row justify-between">
                <span class="text-xl text-white font-bold">{{$boisson->nom}}</span>
                <span class="text-xl font-bold text-white">{{$boisson->prix}}</span>
              </div>
            </div>
        @endforeach

        </div>
    </div>
    @endsection
    
</body>
</html>