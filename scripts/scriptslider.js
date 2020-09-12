var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("sliderp");
  
  var heigh = document.getElementsByClassName("imgp");
  if (n > slides.length) {slideIndex = 1;}    
  if (n < 1) {slideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {
      if(window.screen.width <= 800){
           slides[i].style.display ="none";
           slides[i].style.height ="300px";
           slides[i].style.padding ="10px 20px";
           heigh[i].style.height = "200px";
           
      }else if (window.screen.width>800){
            slides[i].style.display = "block";
          
      }
  }
   slides[slideIndex-1].style.display = "block";
}


