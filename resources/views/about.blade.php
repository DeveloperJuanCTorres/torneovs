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
                        <li><a href="/about" class="active">Nosotros</a></li>
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

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4>Nosotros</h4>
                </div>
                <div class="owl-features owl-carousel">
					@if($temas!=null)
					@foreach($temas as $key => $item)
					<div class="item">
						<div class="thumb">
						<img src="storage/{{$item->image_url}}" alt="">
						<div class="hover-effect">
							<h6>2.4K Streaming</h6>
						</div>
						</div>
						<h4>{{$item->titulo}}<br><span>{{$item->description}}</span></h4>
						<ul>
						<li><i class="fa fa-star"></i> 4.8</li>
						<li><i class="fa fa-download"></i> 2.3M</li>
						</ul>
					</div>
					@endforeach
					@endif
                </div>
              </div>
            </div>
            <div class="col-lg-4" data-bs-spy="scroll">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4>Nuestro Equipo</h4>
                </div>
				<div class="scroller" style="max-height: 450px !important;">
					<ul>	
						@if($equipo!=null)
						@foreach($equipo as $key => $item)
						<li>
							<img src="storage/{{$item->avatar_url}}" alt="" class="templatemo-item">
							<h4>{{$item->name}}</h4>
							@foreach($cargo as $key => $cargos)
								@if($cargos->id == $item->cargo_id)
									<h6>{{$cargos->name}}</h6>
								@endif
							@endforeach
							<span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
							<span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
							<div class="download">
							<a href="{{$item->link_facebook}}">
							<img style="width: 30px;border-radius: 20px;float: right;margin-top: -40px;" src="assets/images/icons/facebook.png" alt="">
							</a>
							</div>
						</li>
					@endforeach
					@endif
					</ul>
				</div>
                <!-- <div class="text-button">
                  <a href="profile.html">View All Games</a>
                </div> -->
              </div>
            </div>
          </div>
          <!-- ***** Featured Games End ***** -->

          <!-- ***** Start Stream Start ***** -->
          <div class="start-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4>{{$nosotros->titulo}}</h4>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon div-center">
                      <img src="assets/images/service-01.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4 class="text-center">Nuestra historia</h4>
                    <p>{{$nosotros->history}}</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon div-center">
                      <img src="assets/images/service-02.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4 class="text-center">Misión</h4>
                    <p>{{$nosotros->mision}}</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="item">
                    <div class="icon div-center">
                      <img src="assets/images/service-03.jpg" alt="" style="max-width: 60px; border-radius: 50%;">
                    </div>
                    <h4 class="text-center">Visión</h4>
                    <p>{{$nosotros->vision}}</p>
                  </div>
                </div>
                <!-- <div class="col-lg-12">
                  <div class="main-button">
                    <a href="profile.html">Go To Profile</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- ***** Start Stream End ***** -->

          <!-- ***** Live Stream Start ***** -->
          <div class="live-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4>Los Videos mas Populares</h4>
              </div>
            </div>
            <div class="row">
              @foreach($promocion as $key => $item)
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="storage/{{$item->imagen_url}}" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a target="_blank" href="{{$item->link_youtube}}">Reproducir</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="storage/{{$item->logo_url}}" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> {{$item->name}}</span>
                    <h4>{{$item->description}}</h4>
                  </div> 
                </div>
              </div>
              @endforeach
              <!-- <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-02.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Reproducir</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-02.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> LunaMa</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-03.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Reproducir</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-03.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-04.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Reproducir</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-04.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> GangTm</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div> 
                </div>
              </div> -->
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="#">Discover All Streams</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Live Stream End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 <a href="#">Torneo VS</a> Todos los derechos reservados. 
          
          <br> Distribuido por <a href="#">Torneo Versus</a></p>
        </div>
      </div>
    </div>
  </footer>

</x-app-layout>