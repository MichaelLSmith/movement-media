console.log('accordion.js');

jQuery(document).ready(function(){
    jQuery( ".bio" ).accordion({
        active: false,
        header: "aside",
        collapsible: true,
        heightStyle: 'content'
    });
});
