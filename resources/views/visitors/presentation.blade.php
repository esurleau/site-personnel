@extends('layouts.all') 
@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1 class="card-title">Présentation</h1>
                        </div>
                        <div class="card-body text-center">
                            <div class="row justify-content-center mb-2">
                                <div class="col-9">
                                    <img src="{{ asset('images/auteur.jpg') }}" class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <h2 class="card-title">Etienne&nbsp;SURLEAU</h2>
                            <p class="card-text"><i class="fa fa-car"></i> Permis B + voiture</p>
                            <p class="card-text"><i class="fa fa-mobile-alt"></i> 06 35 39 77 13</p>
                            <p class="card-text"><i class="fa fa-home"></i> 70 avenue Raymond Poincarré, 21000 Dijon</p>
                            <p class="card-text"><i class="fa fa-envelope"></i> etiennesu@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card ">
                        <div class="card-header text-center">
                            <h2 class="card-title">En bref</h2>
                        </div>
                        <div class="card-header pt-0">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link active" id="diplome-tab" data-toggle="tab" href="#diplome" role="tab" aria-controls="diplome" aria-selected="true"><i class="fa fa-graduation-cap"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link" id="competences-tab" data-toggle="tab" href="#competences" role="tab" aria-controls="competences" aria-selected="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link" id="experiences-tab" data-toggle="tab" href="#experiences" role="tab" aria-controls="experiences" aria-selected="false"><i class="fa fa-briefcase"></i></a>
                                </li>
                                
                            </ul>
                        </div>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="diplome" role="tabpanel" aria-labelledby="diplome-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">2017 - 2018 : LP TeProw, TOEIC</li>
                                    <li class="list-group-item">2015 - 2017 : DUT IQ</li>
                                    <li class="list-group-item">2014 - 2015 : DUT GEII</li>
                                    <li class="list-group-item">2014 : BAC STI2D Itec</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="competences" role="tabpanel" aria-labelledby="competences-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Laravel - Symfony</li>
                                    <li class="list-group-item">PHP - JavaScript - SQL</li>
                                    <li class="list-group-item">Anglais - Gestion de projet</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="experiences" role="tabpanel" aria-labelledby="experiences-tab">
                                <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Développeur Web : Régis Martelet, Dijon</li>
                                    <li class="list-group-item">Développeur Web : DIVIOSO, Chenôve</li>
                                    <li class="list-group-item">Développeur Mobile : ARD, Gap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3 mt-md-0">
                        <div class="card-body">
                            <h2 class="card-title">Qui suis-je ?</h2>
                            <p class="card-text">
                                Développeur web dans l'entreprise de transport Régis Martelet, dans la zone industrielle nord-est de Dijon, diplômé 
                                d'une License Professionnelle. Parle couramment anglais.
                            </p>
                            <h2 class="card-title">Que fais-je ?</h2>
                            <p class="card-text">
                                <b>Professionnellement :</b> du développement web. J'utilise les technologies PHP, SQL, JavaScript et CSS
                                pour réaliser des sites et applications web. Vous en saurez plus en allant visiter les rubriques
                                <a href="#card-formations" class="card-link">Formations</a> et <a href="#card-experiences" class="card-link ml-0">Expériences</a><br>
                                <b>Personellement : </b>du développement web aussi, ce site web n'a pas été développé durant mes heures
                                de travail ! <br>Du sport : tir à l'arc, parkour, VTT, escalade... j'aime la variété.<br>
                                Divertissements: séries VO, bricolage, cuisine, jeux vidéos... pas de quoi m'ennuyer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body" id="card-formations">
                            <h2 class="card-title"><i class="fa fa-graduation-cap"></i> Formations</h2>
                            <div class="timeline">
                                <div class="timeline__group pt-0">
                                    <div class="timeline__box">
                                        <div class="timeline__date">
                                            <span class="timeline__year">2014</span>
                                        </div>
                                        <div class="timeline__post">
                                            <div class="timeline__content">
                                                <p>
                                                    BAC Sciences et Technologies de l'Industrie et du Développement Durable (STI2D).<br>
                                                    Option Innovations Technologiques et Éco-conception (ITEC).<br>
                                                    Mention bien.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline__group pt-0">
                                    <div class="timeline__box">
                                        <div class="timeline__date">
                                            <span class="timeline__year">2015</span>
                                        </div>
                                        <div class="timeline__post">
                                            <div class="timeline__content">
                                                <p>
                                                    DUT Génie Électrique et Informatique Industrielle (GE2I).<br>
                                                    J'ai changé de filière par la suite, par manque d'intérêt.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline__group pt-0">
                                    <div class="timeline__box">
                                        <div class="timeline__date">
                                            <span class="timeline__year">2017</span>
                                        </div>
                                        <div class="timeline__post">
                                            <div class="timeline__content">
                                                <p>
                                                    DUT Informatique (IQ) à l'IUT de Belfort, puis de Dijon <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline__group pt-0">
                                    <div class="timeline__box">
                                        <div class="timeline__date">
                                            <span class="timeline__year">2018</span>
                                        </div>
                                        <div class="timeline__post">
                                            <div class="timeline__content">
                                                <p>
                                                    TOEIC : Test Of English and International Comprehension<br>
                                                    940/1000
                                                </p>
                                            </div>
                                        </div>
                                        <div class="timeline__post">
                                            <div class="timeline__content">
                                                <p>
                                                    LP Mobilité Numérique : Technologies de Projets Web et mobile (TeProw) à l'IUT de Belfort<br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card mt-3" id="card-experiences">
                        <div class="card-header text-center">

                            <h2 class="card-title mb-0 mr-2"><i class="fa fa-briefcase"></i> Expériences</h2>
                        </div>
                        <div class="card-header text-center pt-0 ">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link active" id="RM-tab" data-toggle="tab" href="#RM" role="tab" aria-controls="RM"
                                        aria-selected="true"><img src="{{ asset('images/RM32.png') }}" class="img-fluid"> RM</a>
                                </li>    
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link" id="divioseo-tab" data-toggle="tab" href="#divioseo" role="tab" aria-controls="divioseo"
                                        aria-selected="false"><img src="{{ asset('images/divioseo32.png') }}" class="img-fluid"> Divioseo</a>
                                </li>
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link" id="ard-tab" data-toggle="tab" href="#ard" role="tab" aria-controls="ard"
                                        aria-selected="false"><img src="{{ asset('images/logo_ard32.png') }}" class="img-fluid"> ARD</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="RM" role="tabpanel" aria-labelledby="RM-tab">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <h3 class="card-title">
                                                    Poste: Développeur web.
                                                </h3>
                                                <h5 class="card-subtitle">01/07/2018 - présent</h5>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="card-text">
                                                    <b>Société : </b> Régis Martelet, SASU de transport à Dijon, zone industrielle nord-est.
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="card-text">
                                                    <b>Missions principales : </b> développement de sites web internes, APIs, services web et bases de données.
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <p class="card-text">
                                                    <b>Technologies utilisées : </b> Symfony, SQL, PHP 7, JavaScript.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                            <div class="tab-pane fade" id="divioseo" role="tabpanel" aria-labelledby="divioseo-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h3 class="card-title">
                                            Poste: Développeur web, stagiaire.
                                        </h3>
                                        <h5 class="card-subtitle">05/03/2018 - 21/06/2018</h5>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">
                                            <b>Société : </b> Divioseo, SARL de développement web et mobile à Chenôve, près de Dijon.
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">
                                            <b>Missions principales : </b> développement de sites web pour le compte de la société et de ses clients.
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">
                                            <b>Technologies utilisées : </b> Laravel, VueJS, SQL, PrestaShop, WordPress.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="ard" role="tabpanel" aria-labelledby="ard-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h3 class="card-title">
                                            Poste: Développeur mobile, stagiaire.
                                        </h3>
                                        <h5 class="card-subtitle">03/2017 - 05/2017</h5>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">
                                            <b>Société : </b> Alpes Recherche et Développement, SASU de développement web/mobile/systèmes et sécurité informatique.
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">
                                            <b>Mission principale : </b> développement d'une application mobile permettant de lire des cartes à puce par NFC.
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="card-text">
                                            <b>Technologies utilisées : </b> Java, Android Studio, NFC, cartes NFC NXP.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card mt-3" id="card-competences">
                        <div class="card-header text-center">
                            <h2 class="card-title mb-0 mr-2"><i class="fa fa-wrench"></i> Compétences</h2>               
                        </div>
                        <div class="card-header text-center pt-0">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link active" id="globe-tab" data-toggle="tab" href="#globe" role="tab"
                                        aria-controls="globe" aria-selected="true"><i class="fa fa-globe"></i> <p class="d-none d-md-inline"> Web</p></a>
                                </li>
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link" id="soft-tab" data-toggle="tab" href="#soft" role="tab" aria-controls="soft"
                                        aria-selected="true"><i class="fa fa-microchip"></i><p class="d-none d-md-inline"> Logiciel </p></a>
                                </li>
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link" id="gestion-tab" data-toggle="tab" href="#gestion" role="tab" aria-controls="gestion"
                                        aria-selected="false"><i class="fas fa-project-diagram"></i><p class="d-none d-md-inline"> Gestion </p></a>
                                </li>
                                <li class="nav-item">
                                    <a style="outline:0;color:black" class="nav-link" id="comm-tab" data-toggle="tab" href="#comm" role="tab" aria-controls="comm"
                                        aria-selected="false"><i class="fa fa-comments"></i><p class="d-none d-md-inline"> Social </p></a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="globe" role="tabpanel" aria-labelledby="globe-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/laravel32.png') }}" class="img-fluid"> Laravel 5 - Mon framework favori, ce site est bâti avec.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/symfony32.png') }}" class="img-fluid"> Symfony 4 - Utilisé professionnellement quotidiennement.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/php732.png') }}" class="img-fluid"> PHP7 - Très bon niveau, mon language de prédilection.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/javascript32.png') }}" class="img-fluid"> JavaScript - Bon niveau.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/css332.png') }}" class="img-fluid"> CSS3 - Niveau scolaire, préfère utiliser les thèmes et frameworks.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/html532.png') }}" class="img-fluid"> HTML5 - Connaissances en SEO.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/bootstrap32.png') }}" class="img-fluid"> Bootstrap 4 - Mon framework CSS favori, ce site est bâti avec.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="soft" role="tabpanel" aria-labelledby="soft-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/PS32.png') }}" class="img-fluid"> PHP Storm - Utilisé au quotidien en entreprise.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/visual32.png') }}" class="img-fluid"> Visual Studio / VSCode - Studio pour le C#, et Code pour le web.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/intelij32.png') }}" class="img-fluid"> InteliJ IDEA - J'apprécie énormément ce logiciel pour Java.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/androidstudio32.png') }}" class="img-fluid"> Android Studio - Incontournable en développement mobile.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/csharp32.png') }}" class="img-fluid"> C# - Bonnes connaissances.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/java32.png') }}" class="img-fluid"> Java - Bonnes connaissances.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="gestion" role="tabpanel" aria-labelledby="gestion-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/github32.png') }}" class="img-fluid"> GitHub - Connaissances de base. Utilisé personnellement et en études.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/gitlab32.png') }}" class="img-fluid"> GitLab - Connaissances de base. Utilisé en entreprise.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/libre32.png') }}" class="img-fluid"> Tableur - Bonnes connaissances, Excel et Libre Office.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/trello32.png') }}" class="img-fluid"> Trello - Utilisé en études.
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/agile32.png') }}" class="img-fluid"> Méthode agile - Utilisée en entreprise et en études.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="comm" role="tabpanel" aria-labelledby="comm-tab">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/fr.png') }}" class="img-fluid"> Français - Langue natale
                                    </li>
                                    <li class="list-group-item">
                                        <img src="{{ asset('images/gb.png') }}" class="img-fluid"> Anglais - Très bon niveau lu/écrit/parlé. Score de 940/1000 au TOEIC.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!--
        <div class="col-md-6 mt-2">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        À propos du site
                    </h3>
                    <h5>
                        Pourquoi?
                    </h5>
                    <p class="card-text">
                        <b>Pour le défi : </b>je me suis mis en tête de créer un site web de A à Z et de l'héberger moi même,
                        pour mettre en pratique mes connaissances et en apprendre d'autres.<br>
                        <b>Pour ma carrière : </b>un CV et une lettre de motivation, c'est bien. Un site web, c'est mieux.
                        Si un recruteur veut en savoir plus sur mes compétences, ce site web contient tout ce dont il a besoin
                        et lui permet d'évaluer mes compétences.<br>
                        <b>Pour moi : </b> ce site web contient une partie gestion protégée, qui me permet de gérer ce que
                        bon me semble, pour peux que je décide de le développer, comme des notes, idées, recettes...
                    </p>
                </div>
            </div>
        </div>
    -->
    </div>
</div>
@endsection
@section('footer')
<script>
    $(document).on('click', 'a[href^="#card"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
</script>
@endsection