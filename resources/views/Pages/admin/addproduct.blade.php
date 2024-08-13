<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
    
<form class="" enctype="multipart/form-data"  method="post" action="{{route ('ajouterProduit')}}">
@csrf
<select name="type" required>
    <option value="">---</option>
    <option value="Pizza">Pizza</option>
    <option value="Dessert">Dessert</option>
    <option value="Boisson">Boisson</option>
</select>

<input class="" aria-describedby="user_avatar_help" name="photo" type="file"  accept="image/*" required/>

<input placeholder="Nom" name="nom" class="" required/>

<input placeholder="Ingrédients" name="ingredients" class="" required/>

<textarea placeholder="Description" name="description" class="" required></textarea>

<input placeholder="Taille" name="taille" class=""/>

<input placeholder="Prix" name="prix" class="" required/>

<button> Ajouter </button>

</form>


<div>
{{-- @dump($produits) --}}
    @foreach ($produits as $produit)

    <div>{{$produit->type}}</div>
    <img src="{{ Storage::url($produit->photo) }}" />
    <div>{{$produit->nom}}</div>
    <div>{{$produit->ingredients}}</div>
    <div>{{$produit->description}}</div>
    <div>{{$produit->taille}}</div>
    <div>{{$produit->prix}}€</div>
        

    <a href="{{route ('editProduit', $produit->id)}}"><i class="fa-solid fa-pencil"></i></a>
    <a href="{{route ('supprimerProduit', $produit->id)}}"><i class="fa-solid fa-trash"></i></a>
</div>
    @endforeach


</div>




</body>
</html>