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
                                <h4 class="text-center mb-4">Liste secretaire</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Spécialité</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($secretaires as $secretaire)
                                            <tr>
                                                <td>{{ $secretaire->matriculeSecretaire }}</td>
                                                <td>{{ $secretaire->nomSecretaire }}</td>
                                                <td>{{ $secretaire->prenomSecretaire }}</td>
                                                <td>{{ $secretaire->specialiteSecretaire }}</td>
                                                <td>{{ $secretaire->telephoneSecretaire }}</td>
                                                <td>{{ $secretaire->email }}</td>
                                                <td>
                                                    <form action="{{ route('secretaire.destroy', $secretaire->id) }}" method="POST">
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
