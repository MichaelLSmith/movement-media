console.log('accordion.js');

const accordion = jQuery(document).ready(function(){
    jQuery( ".bio" ).accordion({
        active: false,
        header: "aside",
        collapsible: true,
        heightStyle: 'content'
    });
});

export default accordion;
