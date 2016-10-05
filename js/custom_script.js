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

import smooth_scroll from 'cferdinandi/smooth-scroll';
import accordion from './accordion';

smooth_scroll.init();
console.log(accordion);

console.log('jqueryTest');


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

console.log('gulp test3');

// message to test gulp
console.log('video.js5');
// var row =
//
//     <?php
//         if ( have_rows('video_list') ):
//             while ( have_rows('video_list') ): $row = the_row();
//
//             echo json_encode($ar)
//
//             endwhile;
//         php endif;
//     ?>;
