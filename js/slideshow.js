(function ($) {
    setInterval(
        function slideshow() {
            var $active = $("#slideshow").find("img.active");

            if ($active.length == 0 ) {
                $active = $("#slideshow").find("img:last");
            }

            var $next = $active.next().length ? $active.next() : $("#slideshow").find("img:first");

            $active.addClass("last-active");
    
            $next.css({opacity: 0.0}).addClass("active").animate({opacity: 1.0}, 1000, function() {
                $active.removeClass("active last-active");
            });
        }, 5000
    );
})(jQuery);
