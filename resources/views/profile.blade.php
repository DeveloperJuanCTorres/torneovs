<x-app-layout>
    <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="halloween-loader">
      <img style="width: 100%;" src="assets/images/logoanimado.gif" alt="">
      
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img style="width: 50px !important;" src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">Nosotros</a></li>
                        <li><a href="/contact">Contactanos</a></li>
                        @auth
                        <li>
                          <a href="/profile">{{ Auth::user()->name }} 
                          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img style="display: initial !important;" src="storage/{{ Auth::user()->avatar }}" alt="">   
                          @else
                            <img style="display: initial !important;" src="storage/{{ Auth::user()->avatar }}" alt="">  
                          @endif                      
                          </a>
                        </li>                           
                        @else
                        <li><a href="{{ route('login') }}">Ingresar</a></li>
                        @endauth
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="storage/{{ Auth::user()->avatar }}" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Offline</span>
                      <h4>{{ Auth::user()->name }} </h4>
                      <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                      <div class="main-border-button">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <input style="color: #fff;background-color: #E75E8D;border-radius: 20px;" type="submit" class="btn" value="Cerrar sesion">
                        </form>  
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Nombre: <span>{{ Auth::user()->name }}</span></li>
                      <li>Nik Name: <span>{{ Auth::user()->nick_name }}</span></li>
                      <li>{{ Auth::user()->tipo_doc }}: <span>{{ Auth::user()->numero_doc }}</span></li>
                      <li>ID de Jugador: <span>{{ Auth::user()->id }}</span></li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clips">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="heading-section">
                            <h4>Tus videos mas populares</h4>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-01.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>First Clip</h4>
                              <span><i class="fa fa-eye"></i> 250</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-02.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Second Clip</h4>
                              <span><i class="fa fa-eye"></i> 183</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-03.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Third Clip</h4>
                              <span><i class="fa fa-eye"></i> 141</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="assets/images/clip-04.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Fourth Clip</h4>
                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="main-button">
                            <a href="#">Load More Clips</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library profile-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4>Tu biblioteca de juegos</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>745 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2022</span></li>
                  <li><h4>Hours Played</h4><span>632 H 46 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row text-center">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Encuéntranos</h4>
                                <span>{{$datos->address}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Llámanos</h4>
                                <span>{{$datos->phone}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Correo electrónico</h4>
                                <span>{{$datos->email}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                              <a href="/" class="logo">
                                <img class="img-fluid d-block m-auto" style="width: 100px !important;" src="assets/images/logo.png" alt="">
                              </a>
                            </div>
                            <div class="footer-social-icon text-center">
                                <span>Síguenos</span>
                                <a href="{{$datos->link_facebook}}"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="{{$datos->instagram}}"><i class="fab fa-instagram instagram-bg"></i></a>
                                <a href="{{$datos->tiktok}}"><i style="color: black;" class="fab fa-tiktok bg-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Enlaces Útiles</h3>
                            </div>
                            <ul>
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Contáctanos</a></li>
                                <li><a href="#">Perfil</a></li>
                                <li><a style="color: white;" href="#">Términos y condiciones</a></li>
                                <li><a style="color: white;" href="#">Políticas de privacidad</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                                
                        <div class="row">
                          <a href="/libro-reclamaciones">
                            <h4 class="text-center">LIBRO DE RECLAMACIONES</h4>
                            <img class="d-block m-auto" src="assets/images/libro.png" alt="" style="width: 100px;">
                          </a>
                          <h5 class="text-center">RUC: {{$datos->ruc}}</h5>
                          <h5 class="text-center">{{$datos->razon_social}}</h5>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2025, Todos los derechos reservados <a href="/">Torneos Versus</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>