var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
var index=1;
function plusslide(i){
   index+=i;
    showslide(index);
}

function showslide(n){
    var slides=document.getElementsByClassName("mySlides");


   if(n>slides.length) {index=1;}
   if(n<1) {index=slides.length;}
    for(var n=0; n<slides.length ;n++)
       { slides[n].style.display="none";
       }

    slides[index-1].style.display="block";

}