@extends('layouts.all')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 text-center text-white">
                <div class="row">
                    <div class="col-12">
                        <h1>Bienvenue !</h1>
                        <h3>
                            Je suis Etienne&nbsp;SURLEAU, <br> et ce site web est dédié à ma présentation professionnelle ainsi qu'à mon utilisation personnelle.
                        </h3>
                    </div>
                </div>
                <div class="row d-md-none">
                    <div class="col-4 p-1">
                        <a href="{{ url('/presentation') }}" class="btn btn-outline-light rounded-0 w-100 px-0"><b>Présentation</b></a>
                    </div>
                    <div class="col-4 p-1">
                        <a href="#" class="btn btn-outline-light rounded-0 w-100 px-0"><b>Le site web</b></a>                        
                    </div>
                    <div class="col-4 p-1">
                        <a href="{{ route('login') }}" class="btn btn-outline-light rounded-0 w-100 px-0"><b>Espace perso</b></a>                        
                    </div>
                </div>
                <div class="row text-dark">
                    <div class="col-12 col-md-4 mt-3 p-1">
                        <div class="card rounded-0">
                            <div class="card-img-top">
                                <img class="card-img-top rounded-0" src="{{asset('images/auteurcard.jpg')}}" alt="Card image cap">                                
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    À mon propos
                                </h5>
                                <p class="card-text">
                                    Vous êtes recruteur? Vous souhaitez en savoir plus sur mes compétences?
                                    Cette page dispose des informations dont vous avez besoin.
                                </p>
                                <a href="{{ url('/presentation') }}" class="btn btn-outline-success rounded-0 w-100 px-0"><b>Présentation</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-3 p-1">
                        <div class="card rounded-0">
                            <div class="card-img-top">
                                <img class="card-img-top rounded-0" src="{{asset('images/raspberry-pi-card.jpg')}}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Le site web
                                </h5>
                                <p class="card-text">
                                    Pourquoi créer un site web personnel ? Comment a-t-il été conçu ? Hébergé ?
                                    Toutes les réponses à ces questions et plus encore ici.
                                </p>
                                <a href="{{ url('/website') }}" class="btn btn-outline-success rounded-0 w-100 px-0"><b>En savoir plus</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-3 p-1">
                        <div class="card rounded-0">
                            <div class="card-img-top">
                                <img class="card-img-top rounded-0" src="{{asset('images/perso-card.jpg')}}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Espace perso
                                </h5>
                                <p class="card-text">
                                    Accès à l'espace gestion du site.<br>
                                    Cet espace me sert de base de données personnelle et me permet d'organiser mes idées.
                                </p>
                                <a href="{{ route('login') }}" class="btn btn-outline-success rounded-0 w-100 px-0"><b>Se connecter</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
