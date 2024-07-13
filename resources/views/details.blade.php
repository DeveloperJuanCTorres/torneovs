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
                <h2 style="font-weight: bold;">{{$evento->name}} </h2>
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
                              <a href="{{$detalle->link_facebook}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px" src="assets/images/icons/facebook.png" alt="">
                              </a>
                            </div> 
                            Facebook
                          </li>
                          <li>
                            <div style="display: flex;justify-content: center;">
                              <a href="{{$detalle->link_instagran}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/instagran.png" alt="">
                              </a>
                            </div> 
                             Instagran
                          </li>
                          <li>
                            <div style="display: flex;justify-content: center;">
                              <a href="{{$detalle->link_tiktok}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/tiktok.jpg" alt="">
                              </a>
                            </div> 
                            TikTok
                          </li>
                          <li>
                            <div style="display: flex;justify-content: center;">
                              <a href="{{$detalle->link_youtube}}" target="_blank">
                                <img style="width: 30px;border-radius: 10px;" src="assets/images/icons/youtube.png" alt="">
                              </a>
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

    
        formData.append('file',$('#vaucher')[0].files[0]);
        formData.append('evento',evento);
        formData.append('apoderado',apoderado);
        formData.append('vinculo',vinculo); 
        formData.append('equipo',equipo); 
        formData.append('id',id);
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