<x-app-layout>
<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="halloween-loader">
      <img style="width: 100%;" src="assets/images/logoanimado.gif" alt="">
     
    </div>
  </div>

<!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
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

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="/storage/{{$evento->torneo_url}}" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-8">
                    <div class="thumb">
                      <img src="/storage/{{$evento->banner_url}}" alt="" style="border-radius: 23px;">
                      <a href="{{$evento->link_youtube}}" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2 style="font-weight: bold;">{{$evento->name}}</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>Fecha de inicio</h4>
                          <span>{{$evento->date_start}}</span>
                        </div>
                        <ul>
                          <li>Fecha fin</li>
                          <li>{{$evento->date_end}}</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-info">
                        <ul>
                          <li>
                            <div style="display: flex;justify-content: center;">
                              @if($detalle->link_facebook == null)
                              <a href="#">
                                <img style="width: 30px;border-radius: 10px" src="assets/images/icons/facebook.png" alt="">
                              </a>
                              @else
                              <a href="{{$detalle->link_facebook}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px" src="assets/images/icons/facebook.png" alt="">
                              </a>
                              @endif
                            </div> 
                            Facebook
                          </li>
                          <li>
                            <div style="display: flex;justify-content: center;">
                              @if($detalle->link_instagran == null)
                              <a href="#">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/instagran.png" alt="">
                              </a>
                              @else
                              <a href="{{$detalle->link_instagran}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/instagran.png" alt="">
                              </a>
                              @endif
                            </div> 
                             Instagran
                          </li>
                          <li>
                            <div style="display: flex;justify-content: center;">
                              @if($detalle->link_tiktok == null)
                              <a href="#">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/tiktok.jpg" alt="">
                              </a>
                              @else
                              <a href="{{$detalle->link_tiktok}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/tiktok.jpg" alt="">
                              </a>
                              @endif
                            </div> 
                            TikTok
                          </li>
                          <li>
                            <div style="display: flex;justify-content: center;">
                              @if($detalle->link_youtube == null)
                              <a href="#">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/youtube.png" alt="">
                              </a>
                              @else
                              <a href="{{$detalle->link_youtube}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/youtube.png" alt="">
                              </a>
                              @endif
                            </div> 
                             Youtube
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="row">
                        <div class="col-lg-6">
                          <img src="storage/{{$detalle->imagen1_url}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                        </div>
                        <div class="col-lg-6">
                          <img src="storage/{{$detalle->imagen2_url}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                        </div>
                        <div class="col-lg-12">                          
                          <p>{{$detalle->description}}
                            
                          </p>
                          <br>
                          <p>
                            @if($archivo!=null)
                            Descarga las bases 
                            <a style="color: #fff;" href="/storage/{{$archivo[0]->download_link}}" target="_blank"><i class="fa fa-download"></i> aquí</a>
                            @endif
                          </p>
                          
                        </div>
                        <div class="col-lg-12">
                          <div class="main-border-button">
                            @if($evento->status==1)
                              @auth
                              <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Inscribete aqui!</a>                              
                              @else
                              <a href="/login">Inscribete aqui!</a>
                              @endauth                            
                            @else
                            <a href="#">Muy pronto!</a>
                            @endif

                            <!-- Modal -->
                             @auth
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: #0C076B;">
                                    <h5 class="modal-title" id="staticBackdropLabel">Inscripción</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Torneo a inscribirte</label>
                                        <input style="border-radius: 10px;" type="text" class="form-control" value="{{$evento->name}} - Costo: S/. {{$evento->price}}" disabled>
                                        <input type="hidden" name="eventoid" id="eventoid" value="{{$evento->id}}">
                                      </div>                                 
                                    </div>
                                    <div class="row">
                                      <div class="mb-3">
                                        <label class="form-label">Nombre de Equipo o Cub</label>
                                        <input style="border-radius: 10px;" type="text" class="form-control" name="equipo" id="equipo" placeholder="Escriba el equipo con el que jugará">
                                      </div>                                 
                                    </div>
                                    <div class="row">
                                      <div class="col-6">
                                        <label class="form-label">Telegram</label>
                                        <input style="border-radius: 10px;" type="text" class="form-control" name="telegram" id="telegram" placeholder="Usuario">
                                      </div>
                                      <div class="col-6">
                                        <label class="form-label">Teléfono</label>
                                        <input style="border-radius: 10px;" type="number" class="form-control" name="telefono" id="telefono" placeholder="Número" value="{{$user->phone}}">
                                        
                                      </div>
                                    </div>
                                    <div class="row mt-2">
                                      <div class="col-6">
                                        <label class="form-label">País</label>
                                        <input style="border-radius: 10px;" type="text" class="form-control" name="pais" id="pais">
                                      </div>
                                      <div class="col-6">
                                        <label class="form-label">Ciudad</label>
                                        <input style="border-radius: 10px;" type="text" class="form-control" name="ciudad" id="ciudad">
                                      </div>
                                    </div>
                                    @if($evento->pay==0)
                                    <div class="row">
                                      <div class="mb-3 pt-2 container">
                                        <label for="exampleFormControlInput1" class="form-label">Métodos de pago</label>
                                        <div class="row">
                                          <img src="assets/images/yape.png" style="width: 60px;" alt="">
                                          942093483
                                        </div> 
                                        <div class="row pt-2">
                                          <img src="assets/images/plin.jpg" style="width: 60px;" alt="">
                                          942093483
                                        </div>                                                               
                                      </div>
                                    </div>                                    
                                    <div class="row">
                                      <div class="mb-3 pt-2 container">
                                        <label for="exampleFormControlInput1" class="form-label">Subir comprobante de pago</label>
                                        <input style="border-radius: 10px;" type="file" class="form-control" id="vaucher" name="vaucher">      
                                                                                                 
                                      </div>
                                    </div>
                                    @endif
                                    <input hidden style="border-radius: 10px;" type="text" class="form-control" id="gratis" name="gratis" value="{{$evento->pay}}">   
                                    <hr>
                                    <div class="row">
                                      <div class="mb-3 pt-2 container">
                                          <input class="p-2" name="chec" type="checkbox" id="chec" onclick="myFunction()" onChange="comprobar(this);"> Soy menor de edad                                                                  
                                      </div>
                                    </div>
                                    <div id="boton" readonly style="display:none">
                                      <div class="row">
                                        <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Nombre completo del apoderado</label>
                                          <input style="border-radius: 10px;" type="text" class="form-control" id="apoderado" name="apoderado" placeholder="Nombre completo">
                                          @auth
                                          <input style="border-radius: 10px;" type="text" class="hidden" id="id" name="id" value="{{Auth::user()->id}}">
                                          @else
                                          <input style="border-radius: 10px;" type="text" class="hidden" id="id" name="id" value="0">
                                          @endauth
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">DNI (Apoderado)</label>
                                            <input style="border-radius: 10px;" type="number" class="form-control" id="dni" name="dni" placeholder="Numero de DNI">
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Vínculo</label>
                                            <select style="border-radius: 10px;" class="form-control" name="vinculo" id="vinculo">
                                              <option value="0">Madre/Padre</option>
                                              <option value="1">Tio(a)</option>
                                              <option value="2">Hermano(a)</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" style="background-color: #6c757d !important;" data-bs-dismiss="modal">Salir</button>
                                    <button type="button" class="btn btn-primary" id="btn_pagar" style="background-color: #0d6efd !important;">Inscribirme</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endauth  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4" data-bs-spy="scroll">
                      <div class="top-streamers">
                        <div class="heading-section">
                          <h4>Participantes</h4>
                        </div>
                        <div class="scroller">
                          <ul>
                            @foreach($participantes as $key => $item)
                            <li>
                              <span>{{$key+1}}</span>
                              <img src="storage/{{$item->user->avatar}}" alt="" style="max-width: 46px;max-height: 46px; border-radius: 50%; margin-right: 15px;display: inherit;">                           
                              <h6><i class="fa fa-check"></i> {{$item->user->nick_name}}</h6>                              
                            </li>    
                            @endforeach                                               
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
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

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    const btn_pagar = document.getElementById('btn_pagar');
    var chec = '';
    function myFunction() {
      var checkBox = document.getElementById("chec");
      if (checkBox.checked == true){
        chec = 'SI';
      } else {
        chec = 'NO';
      }
    }

    btn_pagar.addEventListener('click', function (e){
      var formData = new FormData();
      var archive = $("#vaucher").val();
      var evento = $("#eventoid").val();
      var equipo = $("#equipo").val();
      var id = $("#id").val();
      var apoderado = $("#apoderado").val();
      var dni = $("#dni").val();
      var vinculo = $("#vinculo").val();
      var gratis = $("#gratis").val();

      if (equipo == '') {
        Swal.fire({
              icon:'warning',
              text: 'Debes ingresar el nombre de tu Equipo o Club con el que va a jugar',
          });
          return false;      
      }
                     
      if (chec == 'SI') {
        if (apoderado == '') {
          Swal.fire({
              icon:'warning',
              text: 'Debes ingresar el nombre de tu APODERADO',
          });
          return false;
        }       
      }

      if(archive == ''){
          Swal.fire({
              icon:'warning',
              text: 'Debes subir tu comprobante de pago',
          });
          return false;
      }else{
        if (gratis==0) {
          const MAXIMO_TAMANIO_BYTES = 2000000;
            var archivo = $('#vaucher')[0].files[0];
            if (archivo.size > MAXIMO_TAMANIO_BYTES) {              
              Swal.fire({
                  icon:'warning',
                  text: 'Maximum file size is 2MB',
              });
              return false;              
            }
        }            
        }
        console.log(gratis);
        
        if (gratis==0) {
          formData.append('file',$('#vaucher')[0].files[0]);
        }
        
        formData.append('evento',evento);
        formData.append('apoderado',apoderado);
        formData.append('vinculo',vinculo); 
        formData.append('equipo',equipo); 
        formData.append('id',id);
        formData.append('gratis',gratis);
        console.log(formData);
      $.ajax({
          url: "/enviar",
          type: "POST",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
          data: formData,
          contentType: false,
          processData: false,
          beforeSend: function () {
              Swal.fire({
                  header: '...',
                  title: "cargando",
                  allowOutsideClick:false,
                  didOpen: () => {
                      Swal.showLoading()
                  }
              });
          },
          success: function (response) {
              //cambiar gracias por tu compra Swal
                  // window.location.href = "/";
                  if (response.status) {
                  Swal.fire({
                      icon: 'success',
                      title: Response.msg,
                      text: "Inscripción realizada con exito",
                      allowOutsideClick: false,
                      confirmButtonText: "Regresar al Inicio",
                  })
                  .then(resultado => {
                      window.location.href = "/";
                  }) 
                  }
                  else{
                  Swal.fire({
                      icon: 'error',
                      title: response.msg,
                      text: response.msg,
                  })
                  }
                  
          },
          error: function () {
              Swal.fire({
                  icon: 'error',
                  title: "Upps, sucedio un error",
                  text: "Something went wrong!",
              })
          }
      });
    })
    
  </script>
</x-app-layout>