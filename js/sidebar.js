(function ($) {
    $(function() {
        var $sidebar = $("#sidebar-first"),
            $window = $(window),
            offset = $sidebar.offset(),
            topPadding = 0;

        $window.scroll(function() {
            if (offset && $window.scrollTop() > offset.top) {
                $sidebar.stop().animate({marginTop: $window.scrollTop() - offset.top + topPadding});
            } else {
                $sidebar.stop().animate({marginTop: 0});
            }
        });
    });
})(jQuery);
