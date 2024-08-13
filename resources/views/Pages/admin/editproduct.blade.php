<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un produit</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
    
    <div> Modifier un produit</div>

    <form class="" enctype="multipart/form-data"  method="post" action="{{route ('updateProduit', $produit->id)}}">
        @csrf
        <select name="type" required>
            <option value="">---</option>
            <option value="Pizza" {{ $produit->type == 'Pizza' ? 'selected' : '' }}>Pizza</option>
            <option value="Dessert" {{ $produit->type == 'Dessert' ? 'selected' : '' }}>Dessert</option>
            <option value="Boisson" {{ $produit->type == 'Boisson' ? 'selected' : '' }}>Boisson</option>
        </select>
        
        <input    value="{{$produit->photo}}" class="" aria-describedby="user_avatar_help" name="photo" type="file"  accept="image/*" required/>
        
        <input  value="{{$produit->nom}}" placeholder="Nom" name="nom" class="" required/>
        
        <input value="{{$produit->ingredients}}" placeholder="Ingrédients" name="ingredients" class="" required/>
        
        <textarea placeholder="Description" name="description" class="" required>{{$produit->description}}</textarea>
        
        <input value="{{$produit->taille}}" placeholder="Taille" name="taille" class=""/>
        
        <input value="{{$produit->prix}}" placeholder="Prix" name="prix" class="" required/>
        
        <button> Modifier </button>
        
        </form>
    
</body>
</html>