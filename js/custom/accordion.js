console.log('accordion.js');
const accordionInit = function(){
    jQuery('.accordion-inner').click(function() {

        jQuery(this).find('i').toggleClass('fa-angle-right  fa-angle-down'); // add this line
        jQuery('.accordion-inner').removeClass('active');
        jQuery('.bio-text').slideUp('normal');

        if(jQuery(this).next().is(':hidden') == true) {
            jQuery(this).addClass('active');
            jQuery(this).next().slideDown('normal');
        }

    });
    jQuery('.bio-text').hide();
}
export default accordionInit;
