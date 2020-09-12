var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(m) {
  showSlides2(slideIndex2 += m);
}

function showSlides2(m) {
  var j;
  var slides2 = document.getElementsByClassName("slide2");
  
  var heigh2 = document.getElementsByClassName("img2");
  if (m > slides2.length) {slideIndex2 = 1;}    
  if (m < 1) {slideIndex2 = slides2.length;}
  for (j = 0; j < slides2.length; j++) {
      if(window.screen.width <= 800){
           slides2[j].style.display ="none";
           slides2[j].style.height ="300px";
           slides2[j].style.padding ="10px 20px";
           heigh2[j].style.height = "200px";
           
      }else if (window.screen.width>800){
            slides2[j].style.display = "block";
          
      }
  }
   slides2[slideIndex2-1].style.display = "block";
}
