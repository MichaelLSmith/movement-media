console.log('accordion.js');
const accordionInit = function(){
    jQuery('.accordion-inner-flex').click(function() {

        jQuery(this).find('i').toggleClass('fa-angle-right  fa-angle-down'); // add this line
        jQuery('.accordion-inner-flex').removeClass('active');
        jQuery('.accordion_content').slideUp('normal');

        if(jQuery(this).next().is(':hidden') == true) {
            jQuery(this).addClass('active');
            jQuery(this).next().slideDown('normal');
        }

    });
    jQuery('.accordion_content').hide();
}
export default accordionInit;
