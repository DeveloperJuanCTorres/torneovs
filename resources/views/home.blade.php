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
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/about">Nosotros</a></li>
                        <!-- <li><a href="#">Details</a></li> -->
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
              
          <div class="">
            <div class="row">
              <div class="col-lg-12">
                <div class="header-text">
                  <div class="contenedor">
                    @foreach($torneos as $key => $item)
                    @if($key==0)
                    <div class="imagen actual">
                      <img class="pc" style="border-radius: 20px;" src="/storage/{{$item->banner_url}}" />
                      <img class="mobil" style="border-radius: 20px;display: none;" src="/storage/{{$item->banner_mobil_url}}" />
                      <div class="texto">{{$item->name}} </div>
                    </div>
                    @else
                    <div class="imagen">
                      <img class="pc" style="border-radius: 20px;" src="/storage/{{$item->banner_url}}" />
                      <img class="mobil" style="border-radius: 20px;display: none;" src="/storage/{{$item->mobil_url}}" />
                      <div class="texto">{{$item->name}}</div>
                    </div>
                    @endif

                    @endforeach
                    <!-- <div class="imagen">
                      <img style="border-radius: 20px;" src="assets/images/banner1.jpg" />
                      <div class="texto">Parque Nacional Redwood</div>
                    </div>
                    
                    <div class="imagen">
                      <img style="border-radius: 20px;" src="assets/images/banner1.jpg" />
                      <div class="texto">Yellowstone</div>
                    </div>
                    
                    <div class="imagen">
                      <img style="border-radius: 20px;" src="assets/images/banner1.jpg" />
                      <div class="texto">Parque Nacional Yosemite</div>
                    </div> -->
                    
                    <a href="#" class="anterior" onclick="anterior();">&#10094;</a>
                    <a href="#" class="siguiente" onclick="siguiente();">&#10095;</a>
                    
                    <div class="puntos">
                      @foreach($torneos as $key => $item)
                      @if($key==0)
                      <span class="punto activo" onclick="mostrar($key);"></span>
                      @else
                      <span class="punto" onclick="mostrar($key);"></span>
                      <!-- <span class="punto" onclick="mostrar(2);"></span>
                      <span class="punto" onclick="mostrar(3);"></span> -->
                      @endif
                      @endforeach
                    </div>
                   
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Eventos</em> Proximos</h4>
                </div>
                <div class="row">
                  @foreach($torneos as $item)
                  <div class="col-lg-4 col-sm-6">
                    <div class="item">
						          <a href="#">
                      		<img src="/storage/{{$item->torneo_url}}" alt="">
						          </a>
                      <div class="row">
                        <h4 style="text-align: center;font-style: oblique;">{{$item->name}} </h4>
                      </div>
                      <div class="row pt-2">
                        <h4 style="text-align: justify;">
                          {{$item->description}}
                        </h4>
                      </div>
                      <div class="row pt-2">
                        <h4 style="text-align: center;">Fecha: {{$item->date_start}}</h4>
                      </div>
                      <h4>Inscripción<br><span>S/ {{$item->price}}</span></h4>  
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li>
                          <form action="{{route('details')}}" method="post">
                          @csrf
                          <input type="hidden" name="id" value="{{$item->id}}">
                          <input type="submit" class="btn btn-secondary" value="Ver más">
                        
                          </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                  @endforeach                 
                  
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="#">Ver mas eventos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- SHOPPING CARD -->
          <div class="row">
            <div class="col-lg-12">
              <div class="clips">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="heading-section">
                      <h4>Nuestros productos</h4>
                    </div>
                  </div>
                  @foreach($productos as $key => $product)
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <div class="thumb">
                      
                        @php
                          $imagen = json_decode($product->imagen);
                        @endphp
                        
                          <img src="storage/{{$imagen[0]}}" alt="" style="border-radius: 23px;">
                                               
                      </div>
                      <div class="down-content">
                        <h4>{{$product->name}}</h4>
                        <span style="font-size: 18px;"><i class="fa-solid fa-money-bill-wave" style="color: white;"></i>  S/. {{$product->price}}</span>
                        <a href="{{route('productid',$product)}}" class="text-center">
                          <div class="row p-2 d-block">
                            <input class="btn btn-primary" value="Comprar">
                          </div> 
                        </a>                                              
                      </div>
                    </div>
                  </div>
                  @endforeach                  
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="#">Ver más</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>            
          <!-- END SHOPPING CARD -->
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
                                <a href="{{$datos->instagram}}"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="{{$datos->tiktok}}"><i class="fab fa-google-plus-g google-bg"></i></a>
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