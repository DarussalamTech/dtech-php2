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
        
       // $(".inline").colorbox({inline:true, width:"50%"});
        /*
        jQuery(".cirlce_data").hide();
        posions_t = jQuery(".our_services").position();;
        console.log(posions_t);
        
        jQuery(obj).siblings().show('slow');
       
        elem_id = jQuery(obj).siblings().children().eq(2).attr("id");
        jQuery("#"+elem_id +"   .ui-scrollbar-track").show();
       
        jQuery(obj).siblings().children().eq(2).children().show();
        
        console.log(jQuery(obj).siblings().children().eq(2).children());
        
        jQuery(obj).siblings().css("top",(posions_t['top']+200)+"px");
        jQuery(obj).siblings().css("left",(posions_t['left']+50)+"px");
        
        //jQuery("#"+elem_id +"   .cross_img").css("top",(posions_t['top']+200)+"px");
        */
       
       
    },
    hideCircle: function(obj) {
       
        jQuery(obj).parent().parent().parent().parent().hide('slow');
    }
}


