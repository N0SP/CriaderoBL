@extends('layout')

@section('content')

<!-- main-slider -->
<section class="main-slider centred" id="Inicio">
  <div class="main-slider-carousel owl-carousel owl-theme">
    <div class="slide" style="background-image:url({{asset('poopet/images/main-slider/slider-1.png')}})">
      <div class="container">
        <div class="content-box">
          <div class="top-text">Tu Criadero y Escuela Canina de Confianza</div>
          <h1>Reproducción y crianza responsable</h1>
          <div class="slider-btn"><a href="gallery.html" class="theme-btn">Ver Servicios</a></div>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image:url({{asset('poopet/images/main-slider/slider-2.png')}})">
      <div class="container">
        <div class="content-box">
          <div class="top-text">Tu Criadero y Escuela Canina de Confianza</div>
          <h1>Servicio de Hospedaje</h1>
          <div class="slider-btn"><a href="gallery.html" class="theme-btn">Ver Servicios</a></div>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image:url({{asset('poopet/images/main-slider/slider-3.png')}})">
      <div class="container">
        <div class="content-box">
          <div class="top-text">Tu Criadero y Escuela Canina de Confianza</div>
          <h1>Servicios de Groom</h1>
          <div class="slider-btn"><a href="gallery.html" class="theme-btn">Ver Servicios</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- main-slider end -->


<!-- welcome-section -->
<section class="welcome-section sec-pad" id="About-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 content-column">
        <div class="content-box centred">
          <div class="sec-title">
            <div class="top-title">Bienvenido a Criadero B&L</div>
            <h1>Criadero responsable de la raza Labrador</h1>
          </div>
          <div class="text">
            <p>Somos un equipo comprometido con la crianza responsable y el mejoramiento continuo de la raza labrador!</p>
          </div>
          <div class="lower-content">
            <div class="icon-box"><i class="flaticon-phone-call"></i></div>
            <div class="text">Somos CriaderoB&L y Veraguas Dog School</div>
            <h2><a href="https://wa.me/50761315740">6131-5740</a></h2>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 image-column">
        <div class="image-box wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
          <figure class="image"><img src="{{asset('poopet/images/resource/welcome.png')}}" alt=""></figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- welcome-section end -->


<!-- service-section -->
<section class="service-section sec-pad centred gray-bg" id="Services">
  <div class="container">
    <div class="sec-title alternate-color">
      <div class="top-title">Nuestros Servicios</div>
      <h1>Ofrecemos...</h1>
    </div>
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
      </div>
    </div>
    <div class="button-box"><a href="{{ route('servicios') }}" class="theme-btn">Ver todos los servicios</a></div>
  </div>
</section>
<!-- service-section end -->


<!-- takecare-section -->
<section class="takecare-section black-bg centred" id="Gallery">
  <div class="container">
    <div class="sec-title">
      <div class="top-title">Atendemos en todo el proceso de cría</div>
      <h1>Labrador Retriever</h1>
    </div>
    <div class="inner-content">
      <ul class="clearfix">
        <li class="single-item wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="icon-box"><i class="flaticon-dog-1"></i></div>
          <h2><a href="#">Puppies</a></h2>
          <div class="text">Lorem ipsum simply free text in the market</div>
        </li>
        <li class="single-item wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
          <div class="icon-box"><i class="flaticon-dog-1"></i></div>
          <h2><a href="#">Jóvenes</a></h2>
          <div class="text">Lorem ipsum simply free text in the market</div>
        </li>
        <li class="single-item wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="icon-box"><i class="flaticon-dog-1"></i></div>
          <h2><a href="#">Hembra Adulta</a></h2>
          <div class="text">Lorem ipsum simply free text in the market</div>
        </li>
        <li class="single-item wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="icon-box"><i class="flaticon-dog-1"></i></div>
          <h2><a href="#">Macho Adulto</a></h2>
          <div class="text">Lorem ipsum simply free text in the market</div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- takecare-section end -->


<!-- gallery-section -->
<section class="gallery-section" id="Gallery">
  <div class="container-fluid">
    <ul class="gallery-carousel owl-theme owl-carousel">
      <li class="single-gallery-block">
        <figure class="image-box">
          <img src="{{asset('poopet/images/gallery/gallery-1.png')}}" alt="">
          <div class="icon-box"><a href="poopet/images/gallery/gallery-1.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
        </figure>
      </li>
      <li class="single-gallery-block">
        <figure class="image-box">
          <img src="{{asset('poopet/images/gallery/gallery-2.png')}}" alt="">
          <div class="icon-box"><a href="poopet/images/gallery/gallery-2.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
        </figure>
      </li>
      <li class="single-gallery-block">
        <figure class="image-box">
          <img src="{{asset('poopet/images/gallery/gallery-3.png')}}" alt="">
          <div class="icon-box"><a href="poopet/images/gallery/gallery-3.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
        </figure>
      </li>
      <li class="single-gallery-block">
        <figure class="image-box">
          <img src="{{asset('poopet/images/gallery/gallery-4.png')}}" alt="">
          <div class="icon-box"><a href="poopet/images/gallery/gallery-4.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
        </figure>
      </li>
      <li class="single-gallery-block">
        <figure class="image-box">
          <img src="{{asset('poopet/images/gallery/gallery-5.png')}}" alt="">
          <div class="icon-box"><a href="poopet/images/gallery/gallery-5.png" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
        </figure>
      </li>
    </ul>
  </div>
</section>
<!-- gallery-section end -->


<!-- team-section -->
<section class="team-section" id="Staff">
  <div class="container">
    <div class="inner-content">
      <div class="bxslider ">
        <div class="slider-content">
          <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
              <div class="img-content clearfix">
                <figure class="img-box">
                  <img src="{{asset('poopet/images/resource/team-1.png')}}" alt="">
                </figure>
                <div class="slider-pager">
                  <ul class="thumb-box">
                    <li>
                      <a class="active" data-slide-index="0" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-1.png')}}" alt=""></figure>
                      </a>
                    </li>
                    <li>
                      <a data-slide-index="1" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-2.png')}}" alt=""></figure>
                      </a>
                    </li>
                    <li>
                      <a data-slide-index="2" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-3.png')}}" alt=""></figure>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
              <div class="content-box">
                <div class="sec-title">
                  <div class="top-title">Staff de Criadero B&L y Veraguas Dog School</div>
                  <h1>Conoce a nuestros Criadores y Entrenadores</h1>
                </div>
                <h2><a href="#">Roger Rodríguez</a></h2>
                <div class="text">
                  <p>There are many variations of passages of orem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <ul class="info-box">
                  <li>
                    <h3>Experiencia:</h3> 8 años
                  </li>
                  <li>
                    <h3>Razas:</h3> Labrador
                  </li>
                </ul>
                <div class="bottom-content clearfix">
                  <div class="link"><a href="#" class="theme-btn">Ver Perfil</a></div>
                  <ul class="social-style-one">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-content">
          <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
              <div class="img-content clearfix">
                <figure class="img-box">
                  <img src="{{asset('poopet/images/resource/team-2.png')}}" alt="">
                </figure>
                <div class="slider-pager">
                  <ul class="thumb-box">
                    <li>
                      <a class="active" data-slide-index="0" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-1.png')}}" alt=""></figure>
                      </a>
                    </li>
                    <li>
                      <a data-slide-index="1" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-2.png')}}" alt=""></figure>
                      </a>
                    </li>
                    <li>
                      <a data-slide-index="2" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-3.png')}}" alt=""></figure>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
              <div class="content-box">
                <div class="sec-title">
                  <div class="top-title">Staff de Criadero B&L y Veraguas Dog School</div>
                  <h1>Conoce a nuestros Criadores y Entrenadores</h1>
                </div>
                <h2><a href="#">Norka Ruiz</a></h2>
                <div class="text">
                  <p>There are many variations of passages of orem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <ul class="info-box">
                  <li>
                    <h3>Experiencia:</h3> 8 años
                  </li>
                  <li>
                    <h3>Razas:</h3> Labrador
                  </li>
                </ul>
                <div class="bottom-content clearfix">
                  <div class="link"><a href="#" class="theme-btn">Ver Perfil</a></div>
                  <ul class="social-style-one">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-content">
          <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
              <div class="img-content clearfix">
                <figure class="img-box">
                  <img src="{{asset('poopet/images/resource/team-3.png')}}" alt="">
                </figure>
                <div class="slider-pager">
                  <ul class="thumb-box">
                    <li>
                      <a class="active" data-slide-index="0" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-1.png')}}" alt=""></figure>
                      </a>
                    </li>
                    <li>
                      <a data-slide-index="1" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-2.png')}}" alt=""></figure>
                      </a>
                    </li>
                    <li>
                      <a data-slide-index="2" href="#">
                        <figure><img src="{{asset('poopet/images/resource/team-thumb-3.png')}}" alt=""></figure>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
              <div class="content-box">
                <div class="sec-title">
                  <div class="top-title">Staff de Criadero B&L y Veraguas Dog School</div>
                  <h1>Conoce a nuestros Criadores y Entrenadores</h1>
                </div>
                <h2><a href="#">John Doe</a></h2>
                <div class="text">
                  <p>There are many variations of passages of orem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <ul class="info-box">
                  <li>
                    <h3>Experiencia:</h3> - años
                  </li>
                  <li>
                    <h3>Razas:</h3> -
                  </li>
                </ul>
                <div class="bottom-content clearfix">
                  <div class="link"><a href="#" class="theme-btn">Ver Perfil</a></div>
                  <ul class="social-style-one">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- team-section end -->


<!-- clients-section -->
<section class="clients-section gray-bg">
  <div class="container">
    <div class="clients-outer">
      <ul class="clients-carousel owl-carousel">
        <li class="slide-item">
          <figure class="image-box"><a href="https://www.instagram.com/clubretrieverspanama/" target="_blank"><img src="{{asset('poopet/images/clients/clients-1.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="https://www.instagram.com/veraguasdogschool/" target="_blank"><img src="{{asset('poopet/images/clients/clients-2.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="https://www.instagram.com/clubcaninodepanama/" target="_blank"><img src="{{asset('poopet/images/clients/clients-3.png')}}" alt=""></a></figure>
        </li>
        <li class="slide-item">
          <figure class="image-box"><a href="https://www.instagram.com/criaderobl/" target="_blank"><img src="{{asset('poopet/images/clients/clients-4.png')}}" alt=""></a></figure>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- clients-section end -->


<!-- about-section -->
<section class="about-section">
  <div class="bg-column" style="background-image: url({{asset('poopet/images/background/about-bg.jpg')}});"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 content-column">
        <div class="content-box">
          <div class="sec-title">
            <div class="top-title">Acerca de Veraguas Dog School </div>
            <h1>Lo que nos diferencia</h1>
          </div>
          <div class="text">
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh laoreet dolor magna aliquam erat volutpa enad minim ipsum dolor sit amet consectetuer adipiscing elit.</p>
          </div>
          <div class="fact-counter centred">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 counter-column">
                <div class="counter-block wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                  <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="500">0</span>
                  </div>
                  <div class="text">Clientes satisfechos</div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 counter-column">
                <div class="counter-block wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                  <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="8">0</span>
                  </div>
                  <div class="text">de los mejores profesionales</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about-section end -->


<!-- news-section -->
<section class="news-section sec-pad">
  <div class="container">
    <div class="sec-title centred">
      <div class="top-title">Our Blog & News</div>
      <h1>Latest News & Articles</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 news-column">
        <div class="news-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="date">04<br />Mar</div>
          <figure class="image-box"><a href="blog-single.html"><img src="{{asset('poopet/images/resource/news-1.png')}}" alt=""></a></figure>
          <div class="lower-content">
            <ul class="info-box">
              <li>Mike Hardson</li>
              <li>3 Comments</li>
            </ul>
            <h3><a href="blog-single.html">How to take care of any kind of your pets</a></h3>
            <div class="text">
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="link"><a href="blog-single.html">Read more</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 news-column">
        <div class="news-block-one wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="date">05<br />Mar</div>
          <figure class="image-box"><a href="blog-single.html"><img src="{{asset('poopet/images/resource/news-2.png')}}" alt=""></a></figure>
          <div class="lower-content">
            <ul class="info-box">
              <li>Mike Hardson</li>
              <li>2 Comments</li>
            </ul>
            <h3><a href="blog-single.html">Shelter and feed animals that are in need</a></h3>
            <div class="text">
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="link"><a href="blog-single.html">Read more</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 news-column">
        <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="date">06<br />Mar</div>
          <figure class="image-box"><a href="blog-single.html"><img src="{{asset('poopet/images/resource/news-3.png')}}" alt=""></a></figure>
          <div class="lower-content">
            <ul class="info-box">
              <li>Mike Hardson</li>
              <li>4 Comments</li>
            </ul>
            <h3><a href="blog-single.html">Dog walking helps keep your dog sane</a></h3>
            <div class="text">
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="link"><a href="blog-single.html">Read more</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- news-section end -->


<!-- testimonial-section -->
<section class="testimonial-section centred" style="background-image: url({{asset('poopet/images/background/testimonial-bg.jpg')}});">
  <div class="container">
    <div class="inner-content">
      <div class="testimonial-carousel owl-theme owl-carousel">
        <div class="testimonial-content">
          <h2>Nunca había conocido a alguien con tanta pasión por los perros y con tantas ganas de compartir su conocimiento y experiencia con otros como el Sr. Roger. Hoy aprendí mucho y quedé enamorada con lo que vi y sentí: una confianza como si los Nunca había conocido...</h2>
          <span><a href="https://g.co/kgs/iL1eAC" target="_blank">- Massiel Gomez Miller</a></span>
        </div>
        <div class="testimonial-content">
          <h2>Excelente experiencia! Ambiente amigable y acogedor para todos los perritos tanto labradores como para otras razas. El Sr. Roger nos atendió muy bien dando respuesta a todas nuestras inquietudes acerca de los labradores...</h2>
          <span><a href="https://g.co/kgs/QZwxhv" target="_blank">- Lili López</a></span>
        </div>
        <div class="testimonial-content">
          <h2>Went to meet Mr. Roger and his beautiful Labradors. They were all so happy and beautiful. He clearly loves his furry family and it shows. He made us feel welcome, answered all of our questions and let us spend time with the dogs. We are looking forward to bringing home one of his regal pups soon!</h2>
          <span><a href="https://g.co/kgs/gPcYhK" target="_blank">- Robin Doucette</a></span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- testimonial-section end -->
<!-- contact-section -->
<Contactos></Contactos>
<!-- contact-section end -->
@endsection