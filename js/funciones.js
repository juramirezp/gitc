$(document).ready(function(){
            $('#logo_inicio').css({
								            '-webkit-transform': 'scale(' + 1 + ')',
								            '-moz-transform': 'scale(' +  1 + ')',
								            '-ms-transform': 'scale(' +  1 + ')',
								            '-o-transform': 'scale(' +  1 + ')',
								            'transform': 'scale(' +  1 + ')'
								        });

        $(function(){
            //detectar scroll hacia abajo
            var obj = $(document);          //objeto sobre el que quiero detectar scroll
            var obj_top = obj.scrollTop()   //scroll vertical inicial del objeto
            var tam_logo=0 //variable que controla el cambio de tamaño del logo al scroll
            obj.scroll(function(){
                var obj_act_top = $(this).scrollTop();  //obtener scroll top instantaneo
                if(obj_act_top > 10){
                  if(tam_logo==0){
                    //scroll hacia abajo 
                      $('#logo_inicio').css({
								            '-webkit-transform': 'scale(' + 0.6 + ')',
								            '-moz-transform': 'scale(' +  0.6 + ')',
								            '-ms-transform': 'scale(' +  0.6 + ')',
								            '-o-transform': 'scale(' +  0.6 + ')',
								            'transform': 'scale(' +  0.6 + ')'
								        });
                      $(".li-boton").css('padding-top', '2.5em');
                      $('#logo_inicio').css('padding-top', '1em');
                      $('#col-medio').removeClass('col-md-2');
                      $('#col-medio').addClass('col-md-1');
                      /*$('#col-borde').removeClass('col-md-offset-3');
                      $('#col-borde').addClass('col-md-offset-4');*/
                    tam_logo=1;
                  }                   
                }else{
                  if(tam_logo==1){
                    //scroll hacia arriba 
                    $('#logo_inicio').css({
								            '-webkit-transform': 'scale(' + 1 + ')',
								            '-moz-transform': 'scale(' +  1 + ')',
								            '-ms-transform': 'scale(' +  1 + ')',
								            '-o-transform': 'scale(' +  1 + ')',
								            'transform': 'scale(' +  1 + ')'
								        });
                    $('.li-boton').css("padding-top", "4em");
                    $('#logo_inicio').css('padding-top', '3em');
                    $('#col-medio').removeClass('col-md-1');
                      $('#col-medio').addClass('col-md-2');
                      /*$('#col-borde').removeClass('col-md-offset-4');
                      $('#col-borde').addClass('col-md-offset-3');*/
                    tam_logo=0;
                  }
                    
                }
                //obj_top = obj_act_top;    //almacenar scroll top anterior
            });
        });
});