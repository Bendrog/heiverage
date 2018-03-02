
<script >
$(document).ready(function(){

$('div .blockUE').each(function (index, div) {
var id = $(div).attr('id');
    $('button',div).click(function(){
var idspan = "moy"+id;
var iddiv = "res"+id;
  var moy = moyenne(id);
if (moy<=20 & moy>=0){
  $("#"+idspan).replaceWith('<span id='+idspan+'>'+moy+'/20</span>');

  $.post(
      'include/compteurUp.php', // Le fichier cible côté serveur.
      {
          idBlock: id,
          moy: moy
      },
  );



//Change la couleur de la note (rouge ou vert)
if (moy<10){
$("#"+iddiv).css('color', '#EE2B47');
}else{
$("#"+iddiv).css('color', 'green');
}

}else{
$("#"+iddiv).css('color', '#2c2e3e');
$("#"+idspan).replaceWith('<span class="invalide" id='+idspan+'>Saisie invalide </span>');

}
});

});
})
//fonction qui calcule la moyenne
function moyenne(id){
var score=0;
var poids=0;
var id = "#"+id;
$('input', id).each(function (index, input) {
  if ($(this).val()){
  var note = parseFloat($(input).val());
  var coef = parseFloat($(input).attr('placeholder'));
  if (note<=20 & note>=0){
score = score+note*(coef);
poids=poids+coef;
}else{
return false;
}
}  })
moy=score/poids;
var res = Math.round(moy*100)/100;
return res;
}

</script>
