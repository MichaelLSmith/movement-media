console.log('accordion.js');

const accordionInit = function() {
    jQuery( ".bio" ).accordion({
    active: false,
    collapsible: true,
    header: "aside",
    heightStyle: 'content'
});
}

export default accordionInit;
