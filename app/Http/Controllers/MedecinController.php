<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('medecin.add');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medecins =Medecin::all();
        return view('medecin.liste',compact('medecins'));
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
            'matricule'=>'required|unique:medecins',
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|unique:medecins',
            'email'=>'required|unique:users',
            'password'=>'required|min:8',
        ],[
            'matricule.required'=>'le matricule du medecin est obligatoire',
            'matricule.unique'=>'le matricule du medecin doit etre unique',
        ]);

       try{
        $user = new User();
        $user->matricule = $request->matricule;
        $user->email = $request->email;
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->telephone = $request->telephone;
        // $user->password = $request->password;
         $user->password = Hash::make($request->password);
        // $user->role_id = $request->role_id;

        $user->save();

        $medecin = new Medecin();
        // $medecin->matriculeMedecin = $request->matriculeMedecin;
        // $medecin->prenomMedecin = $request->prenomMedecin;
        // $medecin->nomMedecin = $request->nomMedecin;
        // $medecin->telephoneMedecin = $request->telephoneMedecin;
        $medecin->specialite = $request->specialite;
        $medecin->user_id = $user->id;

        $medecin->save();
        return redirect()->route('medecin.index')->with('success', 'Le medecin a été ajouté avec succès.');

       }catch(Exception $e){

        return redirect()->route('medecin.index')->with('error', 'Une erreur s\'est produite lors de l\'ajout du medecin.');

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
        $medecin = Medecin::findOrFail($id);
        $medecin->delete();

        return redirect()->route('medecin.index')->with('success', 'Médecin supprimé avec succès.');
    }
}
