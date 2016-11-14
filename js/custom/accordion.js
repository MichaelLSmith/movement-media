console.log('accordion.js in the house');

const accordionInit = function() {
    jQuery( ".bio" ).accordion({
    active: false,
    collapsible: true,
    header: "aside",
    heightStyle: 'content'
});
}

export default accordionInit;
