@extends('layout')

@section('content')
<!-- page-title -->
<section class="page-title centred" style="background-image: url({{asset('poopet/images/resource/banner-servicios.jpeg')}});">
        <div class="container">
            <h1>Asesoría en la crianza y desarrollo de su perro</h1>
        </div>
    </section>
    <!-- page-title end -->


    <!-- page-info -->
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="{{ route('servicios') }}">Servicios</a></li>
                    <li>Asesoría</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- service-details -->
    <section class="sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details">
                        <div class="inner-box">
                            <div class="content-style-one">
                                <figure class="image-box"><img src="{{asset('poopet/images/resource/service-details-5.jpg')}}" alt=""></figure>
                                <h2>Pets Full Grooming</h2>
                                <div class="text">
                                    <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor erat lectus, euismod posuere erat aliquet quis. Etiam sit amet nunc sed quam dapibus non efficitur at in metus. Nam et metus eget arcu volutpat rhoncus et eu mi. Donec id tellus sed nulla faucibus aliquam.</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi est nibh, hendrerit bibendum enim eu, vehicula porta nisi. Donec at ligula sed turpis mollis commodo in convallis magna. Aliquam a mi mauris. Maecenas volutpat dui vel mauris tempus placerat. Proin blandit eu tortor vel pellentesque. Fusce laoreet ipsum lorem, at aliquet ipsum varius tempus.</p>
                                </div>
                            </div>
                            <div class="content-style-two">
                                <h3>Safety Standards are Included</h3>
                                <div class="text">
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere id cubilia Curae; Maecenas nec tellus vehicula lorem ultricies condimentum. Sed consectetur urna eget et finibus posuere. Sed tempus orci erat, sit amet pretium lorem tincidunt eget. Maecenas porta risus on neque rhoncus, sed pharetra diam vulputate. Nunc in ligula vel sem porttitor consequat. Ut porttitor non ante at bibendum. Praesent posuere turpis lacus, vel tempor felis eleifend eu. Morbi velit odio, pulvinar vel ligula donec, consectetur faucibus elit.</p>
                                </div>
                                <div class="image-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <figure class="image">
                                                <img src="{{asset('poopet/images/resource/service-details-2.jpg')}}" alt="">
                                                <div class="icon-box"><a href="images/resource/service-details-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                            </figure>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <figure class="image">
                                                <img src="{{asset('poopet/images/resource/service-details-3.jpg')}}" alt="">
                                                <div class="icon-box"><a href="images/resource/service-details-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-style-three">
                                <h3>Why We Are Different</h3>
                                <ul class="list">
                                    <li>Every groomer or trainer wears a photo ID badge.</li>
                                    <li>Mobiles are custom wrapped for easy identification.</li>
                                    <li>We are a fully insured nationally ranked pet center.</li>
                                    <li>All work is backed by our exclusive “Streak-Free Guarantee”.</li>
                                    <li>We offer multiple services to take care of your pets.</li>
                                    <li>Our services are more affordable than you think.</li>
                                </ul>
                                <div class="text">
                                    <p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry has been the ndustry standard dummy text ever sincer they llam id condimentum purus In non ex at ligula fringilla bortis. Ut et mauris auctor, aliquet nulla sed, aliquam mauris. Vestibulum sed malesuada dolor. Integer fringilla odio a dolor aliquet, eu euismod lectus porttitor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar sidebar">
                        <div class="sidebar-category sidebar-widget gray-bg wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <h3 class="sidebar-title">Servicios</h3>
                            <div class="widget-content">
                                <ul class="category-list">
                                    <li ><a href="{{ route('reproduccion') }}">Reproducción y crianza responsable</a></li>
                                    <li><a href="{{ route('hospedaje') }}">Servicio de hospedaje</a></li>
                                    <li><a href="{{ route('groomer') }}">Servicio de groom</a></li>
                                    <li><a href="{{ route('entrenamiento') }}">Planes de entrenamiento</a></li>
                                    <li class="active"><a href="{{ route('asesoria') }}">Asesoria de crianza y desarrollo de su perro</a></li>
                                    <li><a href="{{ route('venta') }}">Venta de alimentos y suplementos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-appointment sidebar-widget wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="widget-content centred">
                                <div class="text">Contact Us</div>
                                <h1>Make an Appointment</h1>
                                <a href="contact.html">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->

@endsection