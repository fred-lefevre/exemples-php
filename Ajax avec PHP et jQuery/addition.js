$(document).ready(function () {
    var resultat = $( "div#resultat" );
    resultat.hide();
    
    $( "#form-nombres" ).submit(function( event ) {
        var nb1, nb2, som;
        nb1 = parseInt($( "input[name=nb1]" ).val(), 10);
        nb2 = parseInt($( "input[name=nb2]" ).val(), 10);
        som = $( "#somme" );        
        $.ajax({
            type: 'GET',
            url: 'somme.php',
            data: {nb1: nb1, nb2: nb2},
            dataType: 'html',
            timeout: 500,
            success: function(reponse) {
                som.text(reponse);
                resultat.show();
            },
            error: function() {
                som.text('Echec de la requête');
                resultat.show();
            }
        });   
        event.preventDefault();
    });
    
    $( "#form-nettoyer" ).submit(function( event ) {
        $( "input[name=nb1]" ).val('');
        $( "input[name=nb2]" ).val('');
        resultat.hide();
        event.preventDefault();
    });
});