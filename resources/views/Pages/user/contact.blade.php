@extends('layouts.layoutapp')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>


    @section('title', 'Contact')

    @section('photo')
    <img class="h-screen w-full opacity-60" src="{{ Storage::url('images/contact.jpg') }}" alt="">
    <div class="flex flex-row justify-center">
    <div class="text-white absolute bottom-60 text-6xl font-black"> CONTACTEZ-NOUS </div>
    </div>
    @endsection

    @section('content')

    <div class="p-8 flex flex-row">

        <div class="flex flex-col space-y-4 p-10"> 

        <div class="text-justify"> 
            Praesent gravida diam vel finibus lacinia. Fusce mi enim, semper sit amet velit et, consequat sodales dui.
             Fusce lacinia semper risus, sit amet aliquet arcu sagittis eu. Vivamus porta aliquet faucibus. Phasellus id magna in purus sodales consequat ut a mi. 
             Aliquam vitae lorem dui. Phasellus vel lorem volutpat, maximus lacus eget, blandit dui. Vestibulum neque leo,
             commodo ut accumsan at, sollicitudin eget nulla. Nam condimentum urna dui, eu cursus erat tristique sed. 
        </div>

    <div class="grid grid-cols-2 gap-y-14 gap-x-44">
        <div class="flex flex-row  space-x-4">
            <i class="fa-solid fa-map text-2xl text-beige mt-10"></i>
            <div> 25 Rue des Anthuriums, <br/> Les Trois-Îlets 97229, Martinique </div>
        </div>
        <div class="flex flex-row  space-x-4 ">
            <i class="fa-solid fa-phone text-2xl text-beige"></i>
            <div>0596 57 86 74 </div>
        </div>
        <div class="flex flex-row space-x-4">
            <i class="fa-solid fa-envelope text-2xl text-beige"></i>
            <div>kaydede@contact.com</div>
        </div>
        <div class="flex flex-row space-x-4">
            <i class="fa-solid fa-clock text-2xl text-beige mt-6"></i>
            <div>Du Lundi au Samedi de 11H à 14H et de 17H à 23H</div>
        </div>
    </div>

    </div>


<div class="p-10 flex flex-col items-center">
    <div class="text-beige font-black text-3xl text-center"> FORMULAIRE DE CONTACT </div>

    <form method="post" action="{{route ('contact')}}">
        @csrf

        <div class="flex flex-row space-x-2 mt-6">
            <input class="rounded-lg border-none bg-gris-fonce placeholder-white text-white" placeholder="Nom" name="nom"/>
            <input class="rounded-lg border-none bg-gris-fonce placeholder-white text-white"  placeholder="Adresse e-mail" name="email"/>
        </div>

        <div class="flex flex-col space-y-2">
            <input class="rounded-lg mt-2 border-none bg-gris-fonce placeholder-white text-white"  placeholder="Sujet" name="sujet"/>
            <textarea rows="4" cols="50" class="rounded-lg resize-none border-none bg-gris-fonce placeholder-white text-white" placeholder="Message" name="message"> </textarea>
        </div>

        <div class="flex flex-col items-end">
        <button class="bg-beige text-white font-extrabold rounded-lg px-6 py-2 mt-6"> Envoyer </button>
        </div>
    </form>


</div>





    </div>





    @endsection
    
</body>
</html>