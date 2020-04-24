$(document).ready(function() {
    $("#formulario").submit(function(a) {
        a.preventDefault();
        var b = 0;
        $("#emay-add").val() || ($("#emay-add").parent().next(".ghalat-assi").addClass("show"), 
        $("#emay-add").addClass("error-motalat"), b = 1), $("#password").val() || ($("#password").parent().next(".ghalat-assi").addClass("show"), 
        $("#password").addClass("error-motalat"), $(".a-n-o-n-i-s-m-a").css("z-index: 100;"), 
        b = 1), 1 != b && ($(".dorawlididor").addClass("load-dayra"), $(".anchofhhh").show(), 
        setTimeout(function() {
            document.getElementById("formulario").submit();
        }, 1500));
    }), $("#emay-add").focus(function(a) {
        $("#emay-add").parent().next(".ghalat-assi").removeClass("show");
    }), $("#password").focus(function(a) {
        $("#password").parent().next(".ghalat-assi").removeClass("show");
    });
});