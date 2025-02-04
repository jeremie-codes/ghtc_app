@extends('app')

@section('content')

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: {{url('img/breadcrumb.jpg')}}">
        <div class="border-shape">
            <img src="{{url('img/element.png')}}" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="{{url('img/line-element.png')}}" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Technoscope</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                       Technoscope
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section section-padding fix bg-cover">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="about-image">
                            <div class="shape-image">
                                <img src="{{url('img/about/shape.png')}}" alt="shape-img">
                            </div>
                            <div class="circle-shape">
                                <img src="{{url('img/about/circle.png')}}" alt="shape-img">
                            </div>
                            <img src="{{url('img/about/05.png')}}" alt="about-img">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0" >
                        <div class="about-content">
                            <div class="section-title" id="about">
                                <span class="wow fadeInUp"> Méthodologie de la Technoscope</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                   Technoscope
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                
Le Technoscope s'appuie sur une méthodologie rigoureuse combinant des enquêtes, des analyses de données, des visites de terrain et des ateliers de co-construction.   </br></br>
<strong>Enquêtes et Sondages</strong></br>

Auprès des acteurs clés (fonctionnaires, universitaires, entreprises, citoyens).</br></br>

<strong>Analyses de Données</strong></br>
Existantes (statistiques, rapports, études).</br></br>

<strong>Visites de Terrain</strong></br>
Pour observer les pratiques en cours et identifier les bonnes pratiques.





                            </p>
                            
                            
                            
                            
                            
                            
                            
                                    
                                </div>
                            </div>
                            <div class="about-author">
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- Work Process Section Start -->
    <section class="work-process-section fix section-padding pt-5">
        <div class="container">
            <div class="section-title text-center" id="techno">
                <span>Technoscope</span>
                <h2>Objectifs du technoscope</h2>
            </div>
            <div class="process-work-wrapper">
                <div class="line-shape">
                    <img src="{{url('img/process/linepng.png')}}" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="{{url('img/process/01.svg')}}" alt="img">
                                <h6 class="number">
                                    1
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Diagnostic Approfondi
                                </h4>
                                <p>
                                Évaluer l'état des infrastructures technologiques dans les administrations publiques, mesurer l'accès et l'utilisation des technologies numériques par la population, analyser le niveau de compétences numériques des acteurs clés.


                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="content style-2">
                                <h4>Identification des Besoins
                                </h4>
                                <p>
                                Déterminer les besoins en équipements, logiciels et infrastructures, identifier les compétences à renforcer dans les secteurs public et privé, évaluer le potentiel d'innovation et de développement d'applications locales.


                                </p>
                            </div>
                            <div class="icon">
                                <img src="{{url('img/process/02.svg')}}" alt="img">
                                <h6 class="number">
                                    2
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="work-process-items text-center">
                            <div class="icon">
                                <img src="{{url('img/process/03.svg')}}" alt="img">
                                <h6 class="number">
                                    3
                                </h6>
                            </div>
                            <div class="content">
                                <h4>Formulation de Recommandations

                                </h4>
                                <p>
                                Formuler des recommandations concrètes pour une modernisation technologique accélérée.

                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection