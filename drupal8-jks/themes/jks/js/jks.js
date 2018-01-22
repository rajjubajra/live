/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


!function ($) {
    $(document).ready(function () {




//STICKY HEADER
        (function () {

            var mainnav = $('.header');

            if (mainnav.length) {
                var elmHeight = $('.header-top').outerHeight(true);
                $(window).scroll(function () {

                    var scrolltop = $(window).scrollTop();
                    if (scrolltop > elmHeight) {

                        if (!mainnav.hasClass('sticky')) {
                            mainnav.addClass('sticky');
                        }

                    } else {

                        mainnav.removeClass('sticky');
                    }
                })
            }
        })();









    });
}(jQuery);