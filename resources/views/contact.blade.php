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
                        <!-- <li><a href="#">Details</a></li> -->
                        <li><a href="/contact" class="active">Contactanos</a></li>
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
                  <h4>Ubicanos</h4>
                </div>
                <iframe src="{{$contacto->ubicacion}}"
                height="585" style="border:0;width: 100%;height: 437px;border-radius: 20px;" allowfullscreen="">
                </iframe>
              </div>
            </div>
            <div class="col-lg-4" data-bs-spy="scroll">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4>Datos de contacto</h4>
                </div>
                <div class="scroller" style="max-height: 450px !important;">
                  <ul>	
                    <li style="padding-bottom: 0 !important;">
                      <div style="width: 100px;"><i style="color: #E96A96;" class="fa fa-map-marker"></i></div>
                      <h4>Dirección</h4>
                      <h6>{{$contacto->direccion}}</h6>
                    </li>
                    <li style="padding-bottom: 0 !important;">
                      <div style="width: 100px;"><i style="color: #E96A96;" class="fa fa-phone"></i></div>
                      <h4>Líneas directa</h4>
                      <h6>{{$contacto->numero_contacto}}</h6>
                      <h6>{{$contacto->otro_numero_contacto}}</h6>
                    </li>
                    <li style="padding-bottom: 0 !important;">
                      <div style="width: 100px;"><i style="color: #E96A96;" class="fa fa-envelope"></i></div>
                      <h4>Email</h4>
                      <h6>{{$contacto->email}}</h6>
                    </li>
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
                <h4>CONTACTANOS</h4>
              </div>
              <div class="row">
                <div class="col-12">
                <form action="#">
                    <div class="cotainer">
                      <div class="row" style="padding: 10px;">
                        <div class="col-lg-4">
                          <input id="nombre" style="width: 100%;padding-top: 10px;border-radius: 20px;" type="text" placeholder="Nombre">
                        </div>
                        <div class="col-lg-4">
                          <input id="email" style="width: 100%;padding-top: 10px;border-radius: 20px;" type="text" placeholder="Email">
                        </div>
                        <div class="col-lg-4">
                          <input id="telefono" style="width: 100%;padding-top: 10px;border-radius: 20px;" type="text" placeholder="Teléfono">
                        </div>
                      </div>  
                      <div class="row" style="padding: 10px;">
                        <div class="col-lg-12">
                          <textarea id="mensaje" style="width: 100%;border-radius: 10px;" rows="10" placeholder="Mensaje"></textarea>
                        </div>                        
                      </div>                      
                    </div>                    
                    <!-- <button type="submit" class="site-btn Enviarconsulta">ENVIAR MENSAJE</button> -->
                </form>
                </div>
                
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="#" class="Enviarconsulta">ENVIAR MENSAJE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Start Stream End ***** -->

          
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
                                <a href="{{$datos->link_facebook}}" target="_blank"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="{{$datos->link_instagram}}" target="_blank"><i class="fab fa-instagram instagram-bg"></i></a>
                                <a href="{{$datos->link_tiktok}}" target="_blank"><i style="color: black;" class="fab fa-tiktok bg-white"></i></a>
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

  @push('scripts')
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
			let token = $('meta[name="csrf-token"]').attr('content');

			$(function() {
				$(".Enviarconsulta").on('click',function () {
          console.log('holaa');
					var nombre = $("#nombre").val();
          var email = $("#email").val();
					var telefono = $("#telefono").val();
					var mensaje = $("#mensaje").val();
					if(nombre == ''){
						Swal.fire({
							icon:'warning',
							text: "Tienes que ingresar un nombre",
						});
						return false;
					}
          if(email == ''){
						Swal.fire({
							icon:'warning',
							text: "Tienes que ingresar un correo",
						});
						return false;
					}
          if(telefono == ''){
						Swal.fire({
							icon:'warning',
							text: "Tienes que ingresar una teléfono de contacto",
						});
						return false;
					}                  
					
					if(mensaje == ''){
						Swal.fire({
							icon:'warning',
							text: "Tienes que ingresar un mensaje",
						});
						return false;
					}
					Swal.fire({
						header: '...',
						title: 'loading...',
						allowOutsideClick:false,
						didOpen: () => {
							Swal.showLoading()
						}
					});

					$.ajax({
						url: "/correo",
						method: "post",
						dataType: 'json',
						data: {
							_token: token,
							nombre : nombre,
              email : email,
							telefono: telefono,
							mensaje: mensaje,
						},
						success: function (response) {   
							if (response.status) {
								Swal.fire({
									icon: 'success',
									title: 'OK',
									text: response.msg,
								})  
              // window.location.href = "https://elsvan.onfleekmedia.com/brochure.pdf";                 
							} else {
								Swal.fire({
									icon: 'warning',
									title: 'Oops...',
									text: response.msg,
								})
							}
							$("#nombre").val('');
              $("#email").val('');
							$("#telefono").val('');
							$("#mensaje").val('');
						},
						error: function () {
							Swal.fire({
								icon: 'error',
								title: 'Oops...!!',
								text: 'Algo salió mal, Inténtalo más tarde!',
							})
						}
					});
				});
			})
		</script>
    @endpush

</x-app-layout>