@extends('layouts.layout')

@section('content')

<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">

                                <H4 class="text-center mb-4">Nouveau Secretaire</H4>
                                <form method="POST" action="{{ route('Secretaire.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Matricule</strong></label>
                                        <input type="text" class="form-control" name="matriculeSecretaire"
                                            placeholder="name">
                                            @error('matriculeSecretaire')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Nom</strong></label>
                                        <input type="text" class="form-control" name="nomSecretaire"
                                            placeholder="name">
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Prenom</strong></label>
                                        <input type="text" class="form-control" name="prenomSecretaire"
                                            >
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Poste</strong></label>
                                        <input type="text" class="form-control" name="posteSecretaire"
                                            placeholder="poste">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Telephone</strong></label>
                                        <input type="text" class="form-control" name="telephoneSecretaire"
                                            placeholder="Telephone">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="email">
                                    </div>
                                    <select name="role_id" id="" class="form-control">
                                        <option value="" >Select role</option>
                                        @foreach (App\Models\Role::all() as $role )
                                        <option value="{{$role->id}}">{{$role->nomRole}}</option>

                                        @endforeach
                                    </select>

                                    <div class="form-group">
                                        <label><strong>mots de passe</strong></label>
                                        <input type="password" class="form-control" name="password">
                                    </div>


                                    {{-- <input type="radio" name="is_admin" value="1" id="radioTrue" checked>
                                    <label for="radioTrue">Admin</label>

                                    <input type="radio" name="is_admin" value="0" id="radioFalse">
                                    <label for="radioFalse">User</label> --}}


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

