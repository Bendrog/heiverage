$(document).ready(function() {






    $.ajax({
       url : 'include/compteur.php',
       type : 'GET',
       dataType : 'html',
       success : function(code_html, statut){
           $("#compteur").html(code_html); // On passe code_html à jQuery() qui va nous créer l'arbre DOM !
       },

       error : function(resultat, statut, erreur){

       },

       complete : function(resultat, statut){

       }

    });
});
