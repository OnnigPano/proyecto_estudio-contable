(function(){
    "use strict";

    document.addEventListener("DOMContentLoaded", function(){

        //LEAFLET MAPA
        if(document.getElementById('mapa')) {
            var map = L.map('mapa').setView([-34.601771, -58.390682], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([-34.601771, -58.390682]).addTo(map)
                .bindPopup('Estudio Contable Panossian')
                .openPopup();
        } //FIN LEAFLET MAPA

        //VALIDAR CAMPOS
        
        
        
        
        var divError = document.getElementById('error');
        var botonEnviar = document.getElementById('boton');
        
        const formulario = document.querySelector('#formulario_consulta');

        botonEnviar.addEventListener('click', validarCampos);

        function validarCampos(event){
            event.preventDefault();
            var nombre = document.getElementById('nombre').value;
            var telefono = document.getElementById('telefono').value;
            var consulta = document.getElementById('consulta').value;
            var email = document.getElementById('email').value;

            const emailRegEx = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            if(consulta ==="" || telefono === "" || nombre === "" || email === "" ){
                divError.style.display = 'block';
                divError.innerHTML = "Debe completar todos los campos!";
            } else if(!(emailRegEx.test(email))) {
                divError.style.display = 'block';
                divError.innerHTML = "El correo " + email + " no es valido!";
            } else {    
                divError.style.display = 'none';

                const infoContacto = new FormData();

                infoContacto.append('nombre', nombre);
                infoContacto.append('telefono', telefono);
                infoContacto.append('email', email);
                infoContacto.append('consulta',consulta);

                validar_ajax(infoContacto);
            }
            
        }

       function validar_ajax(datos){

           
           var xhr = new XMLHttpRequest();

           xhr.open ("POST", "http://localhost/proyecto%20onnig/validar-formulario.php", true);
           xhr.onreadystatechange = function(){
               if(xhr.readyState == 4 && xhr.status == 200){
                   var json = JSON.parse(xhr.responseText);
                   console.log(json);
                //    alert(` ${json.nombre} tu formulario ha sido enviado correctamente, en breve te contactaremos. `);
                    swal({
                        title: `${json.nombre}`,
                        text: "Tu formulario ha sido enviado correctamente, en breve te contactaremos!",
                        icon: "success",
                    });
                   formulario.reset();
               }
           }

           xhr.send(datos);


       }
    
       // FIN VALIDAR CAMPOS

    });//DOM LOADED

})();


$(document).ready(function(){

    //BARRA NAVEGACION FIXED

    var headerAltura = $(".headercolor").height();
    var navAltura = $(".menu-principal").innerHeight();
    
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll >= headerAltura){
            $(".menu-principal").addClass("fixed");
            $("body").css( { "margin-top" : navAltura + "px" } );
        } else {
            $(".menu-principal").removeClass("fixed");
            $("body").css( { "margin-top" : 0 } );
        }
    });

    //MENU MOVIL

    $("i.fa-bars").on("click", function(){
        $("nav.barra").slideToggle();
    });
    $("nav.barra").on("click", function(){
            $("nav.barra").fadeOut();
    });

    if($(window).width() <= 768){
        $("nav.barra a").on("click", function(){
            $("nav.barra").slideToggle();
        });
    }


    //SCROLL UP

    $(window).scroll( function(){
        if( $(this).scrollTop() > $(".headercolor").height() ){
            $("#scrollup a").css({ "display" : "block" });
            $("#scrollup").fadeIn();
            
        } else {
            $("#scrollup").fadeOut();
        }
    });

 
});