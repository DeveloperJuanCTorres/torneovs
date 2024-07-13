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
                    <a href="index.html" class="logo">
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
                      <img class="mobil" style="border-radius: 20px;display: none;" src="/storage/{{$item->mobil_url}}" />
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
                  
                  <!-- <div class="col-lg-6">
                    <div class="item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">
                          <div class="item inner-item">
                            <img src="assets/images/popular-05.jpg" alt="">
                            <h4>Mini Craft<br><span>Legendary</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                          <div class="item">
                            <img src="assets/images/popular-06.jpg" alt="">
                            <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                            <ul>
                              <li><i class="fa fa-star"></i> 4.8</li>
                              <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-07.jpg" alt="">
                      <h4>Warface<br><span>Max 3D</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/popular-08.jpg" alt="">
                      <h4>Warcraft<br><span>Legend</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div> -->
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

          <!-- ***** Gaming Library Start ***** -->
          <!-- <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
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
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button"><a href="#">Donwload</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2036</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div>
          </div> -->
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 <a href="#">Torneo VS</a> Todos los derechos reservados. 
          
          <br> Distribuido por <a href="#" target="_blank" >Torneo Versus</a></p>
        </div>
      </div>
    </div>
  </footer>

</x-app-layout>