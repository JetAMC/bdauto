function openModal(){document.getElementById("gallery__myModal").style.display="block"}function closeModal(){document.getElementById("gallery__myModal").style.display="none"}var slideIndex=1;function plusSlides(e){showSlides(slideIndex+=e)}function currentSlide(e){showSlides(slideIndex=e)}function showSlides(e){var l,d=document.getElementsByClassName("gallery__mySlides");for(e>d.length&&(slideIndex=1),e<1&&(slideIndex=d.length),l=0;l<d.length;l++)d[l].style.display="none";d[slideIndex-1].style.display="block"}showSlides(slideIndex);