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
            <div class="page-content px-4">
                <div class="header-text">
                    <div class="heading-section">
                        <h4 class="text-center pt-4"><em>LIBRO DE RECLAMACIONES</em></h4>
                    </div>
                    <h3 class="pt-4">1. DATOS DE LA PERSONA QUE PRESENTA LA QUEJA O RECLAMO</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Fecha de nacimiento</label>
                                <input required id="fecha_nac" class="mt-2" type="date" style="border-radius: 15px;">
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Tipo de documento</label>
                                <select required class="mt-2" style="border-radius: 15px;" name="tipo_doc" id="tipo_doc">
                                    <option value="0">-Seleccionar-</option>
                                    <option value="DNI">DNI</option>
                                    <option value="PASAPORTE">PASAPORTE</option>
                                </select>
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Número de documento</label>
                                <input required id="numero_doc" class="mt-2" type="text" style="border-radius: 15px;" placeholder="Ingresa el número">
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Nombres</label>
                                <input id="nombres" class="mt-2" type="text" style="border-radius: 15px;" placeholder="Ingresa tus nombres">
                            </div>                        
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Apellido paterno</label>
                                <input id="apellido_pat" class="mt-2" type="text" style="border-radius: 15px;" placeholder="Ingresa apellido paterno">
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Apellido materno</label>
                                <input id="apellido_mat" class="mt-2" type="text" style="border-radius: 15px;" placeholder="Ingresa apellido materno">
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Correo electrónico</label>
                                <input id="email" class="mt-2" type="email" style="border-radius: 15px;" placeholder="Ingresa el correo">
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Número de teléfono</label>
                                <input id="phone" class="mt-2" type="number" style="border-radius: 15px;" placeholder="Teléfono">
                            </div>                        
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Departamento</label>
                                <select  style="border-radius: 15px;" id="departamento" class="departamento block mt-1 w-full" name="mauticform[departamento]">    
                                    <option data-id="" value="">Departamento</option>
                                </select>
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Provincia</label>
                                <select style="border-radius: 15px;" id="provincia" class="provincia block mt-1 w-full" name="mauticform[provincia1]">
                                    <option data-id="" value="Chachapoyas">Provincia</option>                
                                </select>
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Distrito</label>
                                <select style="border-radius: 15px;" id="distrito" class="distrito block mt-1 w-full" name="mauticform[distrito1]">
                                    <option data-id="" value="">Distrito</option>
                                </select>
                            </div>                        
                        </div>

                        <div class="col-lg-9 col-md-12 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Dirección fiscal</label>
                                <input id="direccion" class="mt-2" type="text" style="border-radius: 15px;" placeholder="Ingresa la dirección">
                            </div>                        
                        </div>
                    </div>
                    <h3 class="pt-4">2. INFORMACIÓN GENERAL</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Orden de compra</label>
                                <input id="orden_compra" class="mt-2" type="text" style="border-radius: 15px;" placeholder="Ingresa tu orden de compra">
                            </div>                        
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Monto del producto/servicio</label>
                                <input id="producto" class="mt-2" type="number" style="border-radius: 15px;" placeholder="Ingresa el monto del servicio/producto">
                            </div>                        
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Detalla tu queja/reclamo</label>
                                <textarea class="mt-2" style="color: rgb(137, 137, 137);border-radius: 15px;" name="" id="reclamo" rows="7" placeholder="Escribe"></textarea>
                            </div>                        
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 px-6">
                            <div class="row">
                                <label style="color: white;" for="">Pedido</label>
                                <textarea class="mt-2" style="color: rgb(137, 137, 137);border-radius: 15px;" name="" id="pedido" rows="7" placeholder="Escribe"></textarea>
                            </div>                        
                        </div>
                        <div class="col-lg-12 my-4 text-center">
                            <div class="main-button">
                                <a href="#" class="Enviar">ENVIAR</a>
                            </div>
                        </div>
                    </div>
                </div>                
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
                            <span>Colocar dirección aquí</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Llámanos</h4>
                            <span>999999999</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Correo electrónico</h4>
                            <span>mail@info.com</span>
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
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
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
                        <h5 class="text-center">RUC: 20607052689</h5>
                        <h5 class="text-center">TORNEOS VERSUS S.A.C.</h5>
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
				$(".Enviar").on('click',function () {
                    var fecha_nac = $("#fecha_nac").val();

                    var hoy = new Date();
                    var cumpleanos = new Date(fecha_nac);
                    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
                    var m = hoy.getMonth() - cumpleanos.getMonth();
                    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                        edad--;
                    }

                    if(edad >= 18){
                        alert("Eres mayor de edad :D ");
                    }else{
                        Swal.fire({
                            icon: 'warning',
                            title: 'Eres menor de edad',
                            text: 'Para poder hacer una queja/reclamo debes ser mayor de edad',   
                            confirmButtonColor: "#e75e8d",                           
                        })
                        return false;  
                    }
					
                    var tipo_doc = $("#tipo_doc").val();
                    var numero_doc = $("#numero_doc").val();
                    var nombres = $("#nombres").val();
                    var apellido_pat = $("#apellido_pat").val();
                    var apellido_mat = $("#apellido_mat").val();
                    var email = $("#email").val();
					var phone = $("#phone").val();
                    var departamento = $("#departamento").val();
                    var provincia = $("#provincia").val();
                    var distrito = $("#distrito").val();
                    var direccion = $("#direccion").val();
                    var orden_compra = $("#orden_compra").val();
                    var producto = $("#producto").val();
                    var reclamo = $("#reclamo").val();
                    var pedido = $("#pedido").val();
					
					Swal.fire({
						header: '...',
						title: 'loading...',
						allowOutsideClick:false,
						didOpen: () => {
							Swal.showLoading()
						}
					});

					$.ajax({
						url: "/libro",
						method: "post",
						dataType: 'json',
						data: {
							_token: token,
							fecha_nac : fecha_nac,
                            tipo_doc : tipo_doc,
							numero_doc: numero_doc,
							nombres: nombres,
                            apellido_pat: apellido_pat,
                            apellido_mat: apellido_mat,
                            email: email,
                            phone: phone,
                            departamento: departamento,
                            provincia: provincia,
                            distrito: distrito,
                            direccion: direccion,
                            orden_compra: orden_compra,
                            producto: producto,
                            reclamo: reclamo,
                            pedido: pedido,
						},
						success: function (response) {   
							if (response.status) {
								Swal.fire({
									icon: 'success',
									title: 'Libro de Reclamaciones',
									text: response.msg,   
                                    confirmButtonColor: "#e75e8d",                           
								})
                                .then(resultado => {
                                    window.location.href = "/";
                                })                 
							} else {
								Swal.fire({
									icon: 'warning',
									title: 'Oops...',
									text: response.msg,
                                    confirmButtonColor: "#e75e8d",
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