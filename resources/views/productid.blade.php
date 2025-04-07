<x-app-layout>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product.css')}}">
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="halloween-loader">
        <img style="width: 100%;" src="{{ asset('assets/images/logoanimado.gif') }}" alt="">
        
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
                            <img style="width: 50px !important;" src="{{ asset('assets/images/logo.png')}}" alt="">
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
                                <img style="display: initial !important;" src="../storage/{{ Auth::user()->avatar }}" alt="">   
                            @else
                                <img style="display: initial !important;" src="../storage/{{ Auth::user()->avatar }}" alt="">  
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
                  <div class = "card-wrapper">
                    <div class = "card">
                        <!-- card left -->
                        <div class = "product-imgs">
                        <div class = "img-display">
                            <div class = "img-showcase">
                                @php
                                    $imagenes = json_decode($product->imagen);
                                @endphp
                                @foreach($imagenes as $key => $item)
                                    <img src = "../storage/{{$item}}" alt = "shoe image">
                                @endforeach
                            </div>
                        </div>
                        <div class = "img-select">
                            @foreach($imagenes as $key => $item)
                            <div class = "img-item">                                
                                <a href = "#" data-id = "{{$key+1}}">
                                    <img src = "../storage/{{$item}}" alt = "shoe image">
                                </a>
                            </div>
                            @endforeach                                
                        </div>
                        </div>
                        <!-- card right -->
                        <div class = "product-content">
                        <h2 class = "product-title">{{$product->name}}</h2>
                        <!-- <a href = "#" class = "product-link">visit nike store</a> -->
                        <div class = "product-rating">
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star"></i>
                            <i class = "fas fa-star-half-alt"></i>
                            <span>4.7(21)</span>
                        </div>

                        <div class = "product-price">
                            <!-- <p class = "last-price">Old Price: <span>$257.00</span></p> -->
                            <p class = "new-price">Precio: <span> S/. {{$product->price}}</span></p>
                        </div>

                        <div class = "product-detail">
                            <h2>Descripción: </h2>
                            <p>{{$product->description}}</p>
                            
                        </div>

                        <div class = "purchase-info">
                            <input type = "number" min = "0" value = "1">
                            <button type = "button" class = "btn">
                            Add to Cart <i class = "fas fa-shopping-cart"></i>
                            </button>
                            <button type = "button" class = "btn">Compare</button>
                        </div>

                        <div class = "social-links">
                            <p>Share At: </p>
                            <a href = "#">
                            <i class = "fab fa-facebook-f"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-twitter"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-instagram"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-whatsapp"></i>
                            </a>
                            <a href = "#">
                            <i class = "fab fa-pinterest"></i>
                            </a>
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
                                <img class="img-fluid d-block m-auto" style="width: 100px !important;" src="{{ asset('assets/images/logo.png')}}" alt="">
                              </a>
                            </div>
                            <div class="footer-social-icon text-center">
                                <span>Síguenos</span>
                                <a href="{{$datos->link_facebook}}"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="{{$datos->link_instagram}}"><i class="fab fa-instagram instagram-bg"></i></a>
                                <a href="{{$datos->link_tiktok}}"><i style="color: black;" class="fab fa-tiktok bg-white"></i></a>
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
                            <h6 class="text-center">LIBRO DE RECLAMACIONES</h6>
                            <img class="d-block m-auto" src="{{ asset('assets/images/libro.png')}}" alt="" style="width: 100px;">
                          </a>
                          <h6 class="text-center">RUC: {{$datos->ruc}}</h6>
                          <h6 class="text-center">{{$datos->razon_social}}</h6>
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
<script src="{{ asset('assets/js/product.js')}}"></script>