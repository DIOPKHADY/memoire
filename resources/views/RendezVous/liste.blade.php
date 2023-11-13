@extends('layouts.layout')

@section('content')
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-12">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Liste des Rendez-vous</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nom du patient</th>
                                            <th>Prénom du patient</th>
                                            <th>Date du rendez-vous</th>
                                            <th>Heure du rendez-vous</th>
                                            <th>État</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rendezvous as $rdv)
                                            <tr>
                                                <td>{{ $rdv->patient->nomPatient }}</td>
                                                <td>{{ $rdv->patient->prenomPatient }}</td>
                                                <td>{{ $rdv->dateRV }}</td>
                                                <td>{{ $rdv->heureRV }}</td>
                                                <td>{{ $rdv->numeroRV }}</td>
                                                <td>{{ $rdv->etat }}</td>
                                                <td>
                                                    <form action="{{ route('rendezvous.destroy', $rdv->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
