@extends('layouts.app')

@section('content')
    <h1>Accueil</h1>

    <!-- Affichage des images -->
    @foreach($images as $image)
        <img src="{{ $image->url }}" alt="{{ $image->description }}">
    @endforeach

    <!-- Liste des services -->
    <ul>
        @foreach($services as $service)
            <li>{{ $service->name }}</li>
        @endforeach
    </ul>
@endsection
