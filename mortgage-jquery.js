

(function ($) {


    // Show Tool Tip

    jQuery('.mortgage-calc-wrapper .tool-tip-container .text-right').on({

        'mouseover': function () {

            jQuery(this).siblings().css('display', 'block');
        },
        'mouseout': function () {

            jQuery(this).siblings().css('display', 'none');
        },



    })




    //  Radio Button Selection

    jQuery(' input[type="radio"]:checked').parent().addClass('radio-active');

    let inputChecked = jQuery('input[type="radio"]');

    inputChecked.on('click', function () {
        inputChecked.each(function () {
            jQuery(this).parent().toggleClass('radio-active', this.checked);
        })
    })


    //Disable Text Input

    $('.mortgage-calc input[type="text"]').keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
        }
    });







})(window.jQuery);
