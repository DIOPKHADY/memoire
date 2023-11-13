<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Patient;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients =Patient::all();
        return view('patient.liste',compact('patients'));
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
            'nomPatient'=>'required',
            'prenomPatient'=>'required',
            'telPatient'=>'required|unique:patients',
            'adressePatient'=>'required',

        ],[
            'nomPatient.required'=>'le nom du patient est obligatoire',
            'prenomPatient.required'=>'le prenom du patient est obligatoire',
            'telPatient.required'=>'le telephone du patient est obligatoire',
            'adressePatient.required'=>'l adresse du patient est obligatoire',
        ]);

       try{


    $patient = new Patient();
    $patient->user_id = auth()->user()->id;
    $patient->nomPatient = $request->nomPatient;
    $patient->prenomPatient = $request->prenomPatient;
    $patient->telPatient = $request->telPatient;
    $patient->adressePatient = $request->adressePatient;


        $patient->save();
        return redirect()->route('patient.index')->with('success', 'Le patient a été ajouté avec succès.');
       }catch(Exception $e){
        \Log::error('Erreur lors de l\'enregistrement du patient : ' . $e->getMessage());
        return redirect()->route('patient.index')->with('error', 'Une erreur s\'est produite lors de l\'ajout du patient.');

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
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('patient.index')->with('success', 'patient supprimé avec succès.');
    }
}
