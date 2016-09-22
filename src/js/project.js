/**
 * Homepage
 */
application.blocks.homepage = function () {
    var object = $('body[data-template="homepage"]'),
        self = this;

    this.exists = function () {
        return object.length;
    };

    this.init = function () {
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });


    }



};

/**
 * Action
 */
application.blocks.butique = function () {
    var object = $('body[data-template="action"]'),
        self = this;

    this.exists = function () {
        return object.length;
    };

    this.init = function () {
        $('.btn.expand').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            if ($(target).hasClass('expand')) {
                return false;
            }
            $(this).removeClass('visible');
            $(target).addClass('expand');

            $('.btn.collapse').addClass('visible');
        });

        $('.btn.collapse').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            if ($(target).hasClass('expand')) {
                $(this).removeClass('visible');
                $(target).removeClass('expand');

                $('.btn.expand').addClass('visible');
            }
        });
    }
};

/**
 * Action
 */
application.blocks.vacancies = function () {
    var object = $('body[data-template="action"]'),
        self = this;

    this.exists = function () {
        return object.length;
    };

    this.init = function () {
        $(document).ready(function(){
            $(".list-vacancies > a").on("click", function(){
                if($(this).hasClass('active')){
                    $(this).removeClass("active");
                    $(this).siblings('.slide-down').slideUp('normal');
                    $(".list-vacancies > a i").removeClass("ion-minus").addClass("ion-plus");
                }else{
                    $(".list-vacancies > a i").removeClass("ion-minus").addClass("ion-plus");
                    $(this).find("i").removeClass("ion-plus").addClass("ion-minus");
                    $(".list-vacancies > a").removeClass("active");
                    $(this).addClass("active");
                    $('.slide-down').slideUp('normal');
                    $(this).siblings('.slide-down').slideDown('normal');
                }
            });
        });
    }
};