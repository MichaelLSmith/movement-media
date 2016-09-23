console.log('accordion.js');

const accordionInit = function() {
    jQuery( ".bio" ).accordion({
    active: false,
    header: "aside",
    heightStyle: 'content'
});
}

export default accordionInit;
