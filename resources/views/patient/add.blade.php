@extends('layouts.layout')

@section('content')

<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Nouveau Patient</h4>
                                <form method="POST" action="{{ route('Patient.store') }}"> <!-- Utilisez "patient.store" au lieu de "patient.create" -->
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Nom</strong></label>
                                        <input type="text" class="form-control" name="nomPatient"
                                            placeholder="name">
                                            @error('nomPatient')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Prenom</strong></label>
                                        <input type="text" class="form-control" name="prenomPatient"
                                            placeholder="name">
                                            @error('prenomPatient')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Telephone</strong></label>
                                        <input type="text" class="form-control" name="telPatient"
                                            placeholder="Telephone">
                                            @error('telPatient')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Adresse</strong></label>
                                        <input type="text" class="form-control" name="adressePatient" >
                                            @error('adressePatient')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>



                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
