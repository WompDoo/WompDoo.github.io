$( document ).ready(function() {
    $("#edit").click(function(event){
        $("#edit").hide("slow");
        $("#save").show("slow");
        document.getElementById("myP").contentEditable = true;
    });
    var theContent = $('#myP');
    $("#save").click(function(event){
        $("#save").hide("slow");
        $("#edit").show("slow");
        document.getElementById("myP").contentEditable = false;
        var editedContent = theContent.html();
        var a = localStorage.newContent = editedContent;
        $.post('./../controllers/editPage.php', 'val=' + a, function (response) {
        });
    });

});