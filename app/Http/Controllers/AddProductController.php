<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Storage;



class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('pages.admin.addproduct', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //  dd($request);            
        
        Produit::create($request->all());

        $request->validate([
            'type' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'nom' => 'required|string',
            'ingredients' => 'required|string',
            'description' => 'required|string',
            'taille' => 'string',
            'prix' => 'required|numeric',
        ]);
    
            // dd('2', $request);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $photoPath = Storage::url($path);
            
        
        }

            //  Produit::create([
            //     'type' => $request->input('type'),
            //     'photo' => $path,
            //     'nom' => $request->input('nom'),
            //     'ingredients' => $request->input('ingredients'),
            //     'description' => $request->input('description'),
            //     'taille' => $request->input('taille'),
            //     'prix' => $request->input('prix'),
                
            // ]);
             return redirect()->back()->with('photoPath', $photoPath);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit=Produit::findOrFail($id); 
        // dd($edit);
        return view("pages.admin.editproduct", compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $validatedData =  $request->validate(
            [
            'type' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'nom' => 'required|string',
            'ingredients' => 'required|string',
            'description' => 'required|string',
            'taille' => 'string',
            'prix' => 'required|numeric',
            ]);         

            $update=Produit::findOrFail($id);  
            $update->update($validatedData);
    
            return redirect("/addproduct");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete  = Produit::findOrFail($id);
        $delete->delete();

        return redirect("/addproduct");
    }
}
