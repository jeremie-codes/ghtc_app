@extends('app')

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="border-shape">
            <img src="assets/img/element.png" alt="shape-img">
        </div>
        <div class="line-shape">
            <img src="assets/img/line-element.png" alt="shape-img">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Departments</h1>
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
                        Information Management System
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Service Details Section Start -->
    <section class="service-details-section fix section-padding">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-lg-4 order-2 order-md-1">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>All Departments</h3>
                                </div>
                                <div class="widget-categories">
                                    <ul>
                                        @foreach($departements as $departemt)
                                            <li class="{{$departement->id === $departemt->id ? 'active': '' }}">
                                                <a href="{{url('/department/' .$departemt->id)}}">{{ $departemt->titre }}</a>
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </li> 
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-1 order-md-2">
                        <div class="service-details-items">
                            <div class="details-image">
                                <img src="{{ url('storage/'.$departement->image) }}" alt="img" style="height: 470px;">
                            </div>
                            <div class="details-content">
                                <h3>{{ $departement->titre }}</h3>
                                <p class="mt-3">
                                    {{ $departement->description }}
                                </p>
                               
                                <div class="details-video-items">
                                    <div class="video-thumb">
                                        <img src="assets/img/service/Sapiens.jpg" alt="img">
                                       
                                    </div>
                                    
                                </div>
                                
                                <h4><strong> Sapiens Ntatabaye </strong> , Chief of the Department  </h4>
                                <p>
                                    PhD in Earth Observation and Geospatial Analysis – University of Salzburg, Austria, Salzburg and Masters in international Cooperation and Humanitarian aid– Kalu Institute, Spain, Madrid, Specialization in Information Management Technologies – Purdue Global University, USA
                                </p>
                                
                                
                            </div>
                            <div class="faq-content style-3">
                                <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                   
                                   
                                    
                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Footer Section Start >>-->
@endsection