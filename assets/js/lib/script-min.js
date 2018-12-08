(function($) {
    var $pswp = $('.pswp')[0];
    var image = [];

    $('.picture').each( function() {
        var $pic     = $(this),
            getItems = function() {
                var items = [];
                $pic.find('a').each(function() {
                    var $href   = $(this).attr('href'),
                        $size   = $(this).data('size').split('x'),
                        $title   = $(this).data('caption'),
                        $width  = $size[0],
                        $height = $size[1];

                    var item = {
                        src : $href,
                        w   : $width,
                        h   : $height,
                        cap : $title
                    }

                    items.push(item);
                });
                return items;
            }

        var items = getItems();

        $.each(items, function(index, value) {
            image[index]     = new Image();
            image[index].src = value['src'];
        });

        $pic.on('click', '.galBox, .imgBox', function(event) {
            event.preventDefault();
            var $index = $(this).index();
            var options = {
                index: $index,
                bgOpacity: 0.7,
                showHideOpacity: true,
                loop: true,
                pinchToClose: false,
                tapToClose: true,
                captionEl: true,
                    addCaptionHTMLFn: function(item, captionEl, isFake) {
                    // item      - slide object
                    // captionEl - caption DOM element
                    // isFake    - true when content is added to fake caption container
                    //             (used to get size of next or previous caption)
                    if(!item.cap) {
                        captionEl.children[0].innerHTML = '';
                        return false;
                    }
                    captionEl.children[0].innerHTML = item.cap;
                    return true;
                },
            }

            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });
    });
})(jQuery);

