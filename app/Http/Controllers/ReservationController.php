<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('pages.admin.newreservation', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //   dd($request);
          $request->validate([
            'nom' => 'required|string',
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'nombre_personne' => 'required|integer|min:1',
            'commentaires' => 'nullable|string',
        ]);

         Reservation::create($request->all());

         return redirect()->back()->with('success', 'Votre réservation a été prise en compte avec succès. A bientôt !');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
