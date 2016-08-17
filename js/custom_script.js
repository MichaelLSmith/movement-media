// jQuery(document).ready(function(){
//
//  var elem = jQuery("#test-script").html("jQuery says Hello World");
//
//  console.log(elem);
// });
//
// console.log('see in log');


// window.onload = function() {
//     if (window.jQuery) {
//         // jQuery is loaded
//         alert("Yeah!");
//     } else {
//         // jQuery is not loaded
//         alert("Doesn't Work");
//     }
// }

jQuery(document).ready(function(){
    jQuery("button").click(function(){
        jQuery("#test").hide();
    });
});


jQuery( function() {
   jQuery( "#accordion" ).accordion({
     collapsible: true
   });
 } );
