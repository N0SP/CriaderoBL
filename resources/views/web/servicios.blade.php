@extends('layout')

@section('content')
 <!-- page-title -->
 <section class="page-title centred" style="background-image: url({{asset('poopet/images/resource/banner-servicios.jpeg')}});">
        <div class="container">
            <h1>Nuestros Servicios</h1>
        </div>
    </section>
    <!-- page-title end -->


    <!-- page-info -->
    <section class="page-info gray-bg">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="{{ route('home') }}">Homepage</a></li>
                    <li>Servicios</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- service-section -->
    <section class="service-section service-page-section sec-pad centred gray-bg">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="service-block-one">
                            <figure class="image-box"><a href="{{ route('reproduccion') }}"><img src="{{asset('poopet/images/resource/service-1.png')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <h2><a href="{{ route('reproduccion') }}">Reproducción y crianza responsable</a></h2>
                                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                                <div class="link"><a href="{{ route('reproduccion') }}">Leer mas</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="service-block-one">
                            <figure class="image-box"><a href="{{ route('hospedaje') }}"><img src="{{asset('poopet/images/resource/service-2.png')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <h2><a href="{{ route('hospedaje') }}">Servicio de <br />hospedaje</a></h2>
                                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                                <div class="link"><a href="{{ route('hospedaje') }}">Leer mas</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="service-block-one">
                            <figure class="image-box"><a href="{{ route('groomer') }}"><img src="{{asset('poopet/images/resource/service-3.png')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <h2><a href="{{ route('groomer') }}">Servicios de <br />Groom</a></h2>
                                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                                <div class="link"><a href="{{ route('groomer') }}">Leer mas</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="service-block-one">
                            <figure class="image-box"><a href="{{ route('entrenamiento') }}"><img src="{{asset('poopet/images/resource/service-4.png')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <h2><a href="{{ route('entrenamiento') }}">Planes de entrenamiento</a></h2>
                                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                                <div class="link"><a href="{{ route('entrenamiento') }}">Leer mas</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="service-block-one">
                            <figure class="image-box"><a href="{{ route('asesoria') }}"><img src="{{asset('poopet/images/resource/service-5.png')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <h2><a href="{{ route('asesoria') }}">Asesoría en la crianza y desarrollo de su perro</a></h2>
                                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                                <div class="link"><a href="{{ route('asesoria') }}">Leer mas</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-column wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="service-block-one">
                            <figure class="image-box"><a href="{{ route('venta') }}"><img src="{{asset('poopet/images/resource/service-6.png')}}" alt=""></a></figure>
                            <div class="lower-content">
                                <h2><a href="{{ route('venta') }}">Venta de alimentos y suplementos</a></h2>
                                <div class="text">There are many variations of passages of ipsum available but the majority red.</div>
                                <div class="link"><a href="{{ route('venta') }}">Leer mas</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- cta-section -->
    <section class="cta-section centred">
        <div class="container">
            <div class="inner-box">
                <h1>Poopet is here to Support Every<br />Aspect of your Pet’s Life</h1>
                <div class="text">Looking for proessional groomer or trainer?</div>
                <a href="contact.html" class="theme-btn">Contacta con nosotros</a>
            </div>
        </div>
    </section>
    <!-- cta-section end -->

@endsection