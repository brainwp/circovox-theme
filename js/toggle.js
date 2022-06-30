// JavaScript Document
	$(document).ready(function() {
       $("h1#mostra").toggle(
           function() {
               $("div#oculto").fadeIn('slow'); // ou slideDown()
           },
           function() {
               $("div#oculto").fadeOut(); // ou slideUp()
           }
       );
   });
   
	$(document).ready(function() {
       $("h1#mostra-redes").toggle(
           function() {
               $("div#oculto-redes").fadeIn('slow'); // ou slideDown()
           },
           function() {
               $("div#oculto-redes").fadeOut(); // ou slideUp()
           }
       );
   });