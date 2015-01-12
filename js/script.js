$(document).ready(function(){
    $("button").click(function(){
        var id = $(this).attr("id");
        $.post(
            "ajax.php?id="+id,
            function(status){
                if(status){
                    $("#resFriends").html("Impossibile, siete gi&agrave; amici!");
                    $("#resFriends").css("color","red");
                    $("#resFriends").css("display","block");
                }else{ 
                    $("#resFriends").html("Aggiunto agli amici!");
                    $("#resFriends").css("color","green");
                    $("#resFriends").css("display","block");
                }
            }
        );
    });
});

function showAlert(){
    alert("Per visualizzare un profilo, selezionalo dall'elenco in homepage!");
}