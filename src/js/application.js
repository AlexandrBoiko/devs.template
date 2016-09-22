/**
 * Приложение
 */
var application = new function () {
    /**
     * Функциональные блоки шаблона (общие для всех страниц)
     *
     * @var object
     */
    this.blocks = {};

    /**
     * Ф-ии обратного вызова готовности блоков
     *
     * @var array
     */
    var blocksInitCallbacks = [];

    /**
     * Добавляет ф-ю обратного вызова готовности инициализации блоков
     *
     * @param object callback Ф-я обратного вызова
     * @param object context Контекст вызова ф-ии
     * @return void
     */
    this.onBlocksInitComplete = function (callback, context) {
        context = context || this;
        blocksInitCallbacks.push({
            callback: callback,
            context: context
        });
    };

    /* Инициализация */
    $(function () {
        // Инициализируем блоки
        $.each(application.blocks, function (index) {
            var block = new this();
            block._constructor = this;
            application.blocks[index] = block;
        });
        $.each(application.blocks, function (index) {
            if ((this.exists ? this.exists() : true) && this.init && !this.initialized) {
                this.init();
                this.initialized = true;
            }
        });
        for (var i = 0; i < blocksInitCallbacks.length; i++) {
            blocksInitCallbacks[i].callback.call(blocksInitCallbacks[i].context);
        }
    });
};

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});




