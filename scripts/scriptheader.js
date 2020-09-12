$(document).ready(main);
      var contador=1;  
    function main(){
            $('.menus').click(function (){
                //$('nav').toggle();
                if(contador==1){
                    $('.cel').animate({left:'0%'});
                    contador=0;
                }else{
                    contador=1;
                     $('.cel').animate({left:'-100%'});
                }
            });
        }