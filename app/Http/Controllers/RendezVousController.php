<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\User;
use App\Models\Patient;
use App\Models\Medecin;
use Illuminate\Support\Facades\Log;
use Exception;


class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RendezVous.Rv');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rendezvous=RendezVous::all();
        return view('RendezVous.liste', compact('rendezvous'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'nomPatient' => 'required',
            'prenomPatient' => 'required',
            'dateRV' => 'required',
            'heureRV' => 'required',
            'numeroRV' => 'required',
            'etat' => 'required',
        ], [
            'nomPatient.required' => 'Le nom du patient est obligatoire.',
            'prenomPatient.required' => 'Le prénom du patient est obligatoire.',
            'dateRV.required' => 'La date du rendez-vous est obligatoire.',
            'heureRV.required' => 'L\'heure du rendez-vous est obligatoire.',
            'etat.required' => 'L\'état du rendez-vous est obligatoire.',
        ]);

        try {
            // Assurez-vous que les modèles Medecin et Patient sont bien chargés
            $medecin = Medecin::find($request->medecin_id);
            $patient = Patient::find($request->patient_id);

            $rendezvous = new RendezVous(); // Utilisez la bonne casse pour le nom du modèle
            $rendezvous->user_id = auth()->user()->id;
            $rendezvous->medecin_id =$request->medecin_id;
            $rendezvous->patient_id = $request->patient_id;
            $rendezvous->dateRV = $request->dateRV;
            $rendezvous->heureRV = $request->heureRV;
            $rendezvous->numeroRV = $request->numeroRV;
            $rendezvous->etat = $request->etat;

            // Retirez cette ligne de débogage, elle n'est plus nécessaire
            // dd($rendezvous);

            $rendezvous->save();

            return redirect()->route('RendezVous.index')->with('success', 'Le rendez-vous a été ajouté avec succès.');
        } catch (Exception $e) {
            Log::error('Erreur lors de l\'enregistrement du rendez-vous : ' . $e->getMessage());
            return redirect()->route('RendezVous.index')->with('error', 'Une erreur s\'est produite lors de l\'ajout du rendez-vous. Veuillez consulter les journaux pour plus d\'informations.');
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rendezvous = rendezvous::findOrFail($id);
        $rendezvous->delete();

        return redirect()->route('rendezvous.index')->with('success', 'rendezvous  supprimé avec succès.');
    }
}
