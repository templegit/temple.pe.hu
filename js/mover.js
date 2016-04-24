jQuery(document).ready(function () {
    if (Math.random() < 2) {
        var MAX_IMAGES = 13;
        var container = jQuery('<div>');
        container.style.position = 'fixed';
        container.style.width = '100%';
        container.style.height = '100%';
        jQuery('body').append(container);
        var mover = jQuery('<img>');
        mover.attr('id', 'mover');
        mover[0].style.position = 'fixed';
        mover[0].style.left = 0;
        mover[0].style.top = 0;
        mover[0].src = 'images/wordart/' + Math.ceil(Math.random()*MAX_IMAGES) + '.png'
        mover.appendTo(container);
        jQuery('#mover').bounce({
            speed: 9
        });
    }
})

$.fn.bounce = function(options) {
    
    var settings = $.extend({
        speed: 10
    }, options);

    return $(this).each(function() {
        
        var $this = $(this),
            $parent = jQuery('body'),
            height = window.innerHeight,
            width = window.innerWidth,
            top = Math.floor(Math.random() * (height / 2)) + height / 4,
            left = Math.floor(Math.random() * (width / 2)) + width / 4,
            vectorX = settings.speed * (Math.random() > 0.5 ? 1 : -1),
            vectorY = settings.speed * (Math.random() > 0.5 ? 1 : -1);

        // place initialy in a random location
        $this.css({
            'top': 0,
            'left': 0
        }).data('vector', {
            'x': vectorX,
            'y': vectorY
        });

        var move = function($e) {
            
            var offset = $e.offset(),
                width = $e.width(),
                height = $e.height(),
                vector = $e.data('vector'),
                $parent = $e.parent();

            if (offset.left <= 0 && vector.x < 0) {
                vector.x = -1 * vector.x;
            }
            if ((offset.left + width) >= $parent.width()) {
                vector.x = -1 * vector.x;
            }
            if (offset.top <= 0 && vector.y < 0) {
                vector.y = -1 * vector.y;
            }
            if ((offset.top + height) >= $parent.height()) {
                vector.y = -1 * vector.y;
            }

            $e.css({
                'top': offset.top + vector.y + 'px',
                'left': offset.left + vector.x + 'px'
            }).data('vector', {
                'x': vector.x,
                'y': vector.y
            });
            
            setTimeout(function() {
                move($e);
            }, 50);
            
        };
        
        move($this);
    });

};