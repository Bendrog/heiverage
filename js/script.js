$(document).ready(function() {



  $('div .blockUE').each(function(index, div) {
    var id = $(div).attr('id');

    $('button', div).click(function() {


      var idspan = "moy" + id.substr(2, 3);
      var iddiv = "res" + id.substr(2, 3);
      var moy = moyenne(id);
console.log(idspan);
        if (moy <= 20 && moy >= 0 && moy!=false) {
        $("#" + idspan).replaceWith('<span id=' + idspan + '>' + moy + '/20</span>');
        var idPost= id.substr(2, 3);
        $.post(
          'include/compteurUp.php', // Le fichier cible côté serveur.
          {
            idBlock: idPost,
            moy: moy
          }
        );

        //Change la couleur de la note (rouge ou vert)
        if (moy < 10) {
          $("#" + iddiv).css('color', '#EE2B47');
        } else {
          $("#" + iddiv).css('color', 'green');
        }

      } else {
        $("#" + iddiv).css('color', '#2c2e3e');
        $("#" + idspan).replaceWith('<span class="invalide" id=' + idspan + '>Saisie invalide </span>');

      }


    });

  });
})
//fonction qui calcule la moyenne
function moyenne(idUE) {
  var score = 0;
  var poids = 0;
  var id = "#" + idUE;
var flag = 1;
console.log(id);
  $('input', id).each(function(index, input) {
var val= $(this).val();

    if (val) {

      var note = parseFloat($(input).val());
      var coef = parseFloat($(input).attr('placeholder'));
      if (note <= 20 && note >= 0) {

        score = score + note * (coef);
        poids = poids + coef;
        var idchamp = $(input).attr('id');
      setCookie(idchamp, note);
      } else {
        flag = 0;
      }
      }

  })

if (flag == 1){
  var rep = score / poids;
  var res = Math.round(rep * 100) / 100;
  return res;

}else{return false;}
}


function setCookie(Name, Value) {
  //console.log(Name, Value);
        var today = new Date(), expires = new Date();
        expires.setTime(today.getTime() + (60*24*60*60*1000));
        document.cookie = Name + "=" + encodeURIComponent(Value) + ";expires=" + expires.toGMTString();
}
