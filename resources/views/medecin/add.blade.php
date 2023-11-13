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
                                <h4 class="text-center mb-4">Nouveau medecin</h4>
                                <form method="POST" action="{{ route('Medecin.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Matricule</strong></label>
                                        <input type="text" class="form-control" name="matricule"
                                            placeholder="name">
                                            @error('matricule')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Nom</strong></label>
                                        <input type="text" class="form-control" name="Nom"
                                            placeholder="name">
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Prenom</strong></label>
                                        <input type="text" class="form-control" name="prenom"
                                            >
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Telephone</strong></label>
                                        <input type="number" class="form-control" name="telephone"
                                            placeholder="telephone">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Specialite</strong></label>
                                        <input type="text" class="form-control" name="specialite"
                                            placeholder="specialite">
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

