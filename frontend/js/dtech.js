/* 
 * dtech class file for doing all js work
 *  
 */

var dtech = {
    /**
     * will take to top of the page
     * @returns 
     */
    scrolltoTopOfPage: function() {
        $("html, body").animate({scrollTop: 0}, "slow");
        dtech.removingHashfromUrl();
    },
    /**
     * section will be loaded 
     * when click on these
     * @param {type} section_id
     * @returns 
     */
    scrolltoSection: function(section_id) {
        $('html, body').animate({
            scrollTop: $("#" + section_id).offset().top
        }, 2000);
    },
    /**
     * removing hash 
     * @returns {undefined}
     */
    removingHashfromUrl: function() {
        if (window.location.href.search("#") != -1) {
            window.location.hash = '';
        }
    },
    /**
     * circle part 
     * @param {type} elem_id
     * @returns {undefined}
     */
    showCirclePart: function(obj) {
        //dtech.removingHashfromUrl();
        //dtech.scrolltoSection('services');
       
        jQuery(".cirlce_data").hide();

        jQuery(obj).siblings().show('slow');
    },
    hideCircle: function(obj) {
        jQuery(obj).parent().parent().hide('slow');
    }
}


