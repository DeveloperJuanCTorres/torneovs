// var actual = 0;
// function puntos(n){
// 	var ptn = document.getElementsByClassName("punto");
// 	for(i = 0; i<ptn.length; i++){
// 		if(ptn[i].className.includes("activo")){
// 			ptn[i].className = ptn[i].className.replace("activo", "");
// 			break;
// 		}
// 	}
// 	ptn[n].className += " activo";
// }
// function mostrar(n){
// 	var imagenes = document.getElementsByClassName("imagen");
// 	for(i = 0; i< imagenes.length; i++){
// 		if(imagenes[i].className.includes("actual")){
// 			imagenes[i].className = imagenes[i].className.replace("actual", "");
// 			break;
// 		}
// 	}
// 	actual = n;
// 	imagenes[n].className += " actual";
// 	puntos(n);
// }

// function siguiente(){
// 	var imagenes = document.getElementsByClassName("imagen");
// 	actual++;
// 	if(actual > imagenes.length - 1){
// 		actual = 0;
// 	}
// 	mostrar(actual);
// }
// function anterior(){
// 	var imagenes = document.getElementsByClassName("imagen");
// 	actual--;
// 	if(actual < 0){
// 		actual = imagenes.length - 1;
// 	}
// 	mostrar(actual);
// }

// var velocidad = 5000;
// var play = setInterval("siguiente()", velocidad);

// function playpause(){
// 	var boton = document.getElementById("btn");
// 	if(play == null){
// 		boton.src = "http://www.reciclay.com.ve/gio/pause.png";
// 		play = setInterval("siguiente()", velocidad);
// 	} else {
// 		clearInterval(play);
// 		play = null;
// 		boton.src = "http://www.reciclay.com.ve/gio/play.png";
// 	}
// }

// function comprobar(obj)
// {   
// 	if (obj.checked){
		
// document.getElementById('boton').style.display = "";
// 	} else{
		
// document.getElementById('boton').style.display = "none";
// 	}     
// }

// // LOGIN
// $(function(){
  
// 	function toggleView(){
// 	  $('.login').toggleClass('is-active');
// 	  $('.register').toggleClass('is-active');
// 	  $('.sign-up-toggle').toggleClass('is-active');
// 	  $('.login-toggle').toggleClass('is-active');
// 	}
	
// 	function slideElements(prop){
// 	  $(prop.showEle).removeClass(prop.removeShowClass);
// 	  $(prop.showEle).addClass(prop.addShowClass);
// 	  $(prop.hideEle).removeClass(prop.removeHideClass);
// 	  $(prop.hideEle).addClass(prop.addHideClass);
// 	}
	
// 	$('.sign-up-toggle a').on('click',function(){
// 	  toggleView();
// 	  $('.login-view-toggle').addClass('move-top');
// 	  $('.login-view-toggle').removeClass('move-bottom');
// 	  slideElements({
// 		showEle: '.register',
// 		removeShowClass: 'down',
// 		addShowClass: 'pull-up',
// 		hideEle: '.login',
// 		addHideClass: 'up',
// 		removeHideClass: 'push-down'
// 	  });
// 	});
	
// 	$('.login-toggle a').on('click',function(){
// 	  toggleView();
// 	  $('.login-view-toggle').addClass('move-bottom');
// 	  $('.login-view-toggle').removeClass('move-top');
// 	  slideElements({
// 		showEle: '.login',
// 		removeShowClass: 'up',
// 		addShowClass: 'push-down',
// 		hideEle: '.register',
// 		addHideClass: 'down',
// 		removeHideClass: 'pull-up'
// 	  });
// 	});
	
//   });
// //FIN LOGIN