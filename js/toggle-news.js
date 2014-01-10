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