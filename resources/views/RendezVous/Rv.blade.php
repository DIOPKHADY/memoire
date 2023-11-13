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
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Nouveau Rendez-vous</h4>
                                <form method="POST" action="{{ route('RendezVous.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Nom du patient</strong></label>
                                        <input type="text" class="form-control" name="nomPatient" placeholder="Nom du patient">
                                        @error('nomPatient')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Prénom du patient</strong></label>
                                        <input type="text" class="form-control" name="prenomPatient" placeholder="Prénom du patient">
                                        @error('prenomPatient')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Date du rendez-vous</strong></label>
                                        <input type="date" class="form-control" name="dateRV">
                                        @error('dateRV')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Heure du rendez-vous</strong></label>
                                        <input type="time" class="form-control" name="heureRV">
                                        @error('heureRV')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Numero</strong></label>
                                        <input type="text" class="form-control" name="numeroRV" placeholder="Numero du rendez-vous">
                                        @error('numeroRV')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>État</strong></label>
                                        <input type="text" class="form-control" name="etat" placeholder="État du rendez-vous">
                                        @error('etat')
                                            <span class="text-danger">{{ $message }}</span>
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
