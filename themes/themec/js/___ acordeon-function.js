(function($) {
    // demos
    $('#one').liteAccordion({
                    onTriggerSlide : function() {
                            this.find('figcaption').fadeOut(10);
                    },
                    onSlideAnimComplete : function() {    
                            this.find('figcaption').fadeIn();
                    },
                    autoPlay : false,
                    pauseOnHover : true,
                    theme : 'stitch',
                    rounded : true,
                    enumerateSlides : false                  
    }).find('figcaption:first').show();
})(jQuery);  
