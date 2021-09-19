//NAVIGACIONI BAR - - - - - - - - - - - - - - - - - - -
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("mynavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}
function toggleFunction() {
    var x = document.getElementById("navmob");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
//NAVIGACIONI BAR KRAJ - - - - - - - - - - - 
var kolicina = 0;
var theTotal = 0;
function aFunction(button){

    kolicina++;
    theTotal = Number(theTotal) + Number($(button).val());
    $('#cart-value').text(theTotal +" RSD");
    document.getElementById('cart').setAttribute("href", "cart.php?theTotal="+theTotal+"&kolicina="+kolicina);



}

// SLIDESHOW - - - - - - - - - - - - - - - -
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
// SLIDESHOW KRAJ - - - - - - - - - - - - - - - - - - - - -