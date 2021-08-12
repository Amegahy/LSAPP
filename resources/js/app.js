var $ = require( "jquery" );
require( "bootstrap" );

$( document ).ready(function() {
    $(".navbar-toggler").click(function(){
        $(".navbar-toggler + .collapse").toggleClass("show");
    });
});