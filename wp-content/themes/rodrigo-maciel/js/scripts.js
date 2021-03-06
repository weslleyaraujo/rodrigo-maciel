$(document).ready(function(){

	$('html').removeClass('no-js');
	$('html').addClass('js');

	jQuery.fn.exists = function() { return jQuery(this).length > 0 ? true : false; };

    if ($('input[mask]').exists()) {
        $.mask.masks = $.extend($.mask.masks,{
            int: { mask: '9', type:'repeat', 'maxLength': 20 },
            alpha_num: { mask:'*', type:'repeat', 'maxLength': 20 },
            datetime: { mask: '39/19/9999 29:59:99' },
            intsimple: { mask: '9999999999',type : "reverse"},
            kilo: { mask: '99,99999999',type : "reverse"},
        });
        $('input:text').setMask({
            attr: 'mask'
        });
        $('input[mask=telefone]').focus(function(){
            $(this).setMask('(99) 9999-99999');
        }).keyup(function(){
            var target = $(this);
            var phone = target.val().replace(/\D/g, '');
            target.unsetMask();
            if ( phone.length > 10 ) {
                target.setMask("(99) 99999-9999");
            } else {
                target.setMask("(99) 9999-99999");
            }
        });
    }

    // #internal-slide
    if ($('#internal-slide').exists()) {
        
        var internal = (function() {

            var intSlide = $('#internal-slide'),
                position = {},
                mainText = $('.main-text'),
                o        = null,
                counter  = $('.count');

            function bindSlide() {
                intSlide.cycle({
                    centerHorz: "true",
                    autoHeight: "container",
                    loader: "wait",
                    timeout: 0,
                    next: '.prev',
                    prev: '.next',
                    slides: 'img'
                });
                intSlide.on('cycle-initialized', function(event, optionHash) {
                    counter.find('.s').html(optionHash.slideCount);
                });
            }

            function bindChanges() {
                intSlide.on('cycle-update-view', function() {
                    counter.find('.f').html(intSlide.find('.cycle-slide-active').attr('rel'));
                });
            }

            function init() {
                bindSlide();
                bindChanges();
            }

            return {
                init: init
            };

        }());

        internal.init();
    }

    // fixed nav
    var nav = (function() {
        
        var windowDocument = $(window),
            obj            = $('nav.main ul');

        function init() {
            bindScroll();
        }

        function fixedObj() {
            obj.parent().addClass('fixed');
        }

        function normalObj() {
            obj.parent().removeClass('fixed');
        }

        function compare() {
           if (windowDocument.scrollTop() >= obj.height()) {
                fixedObj();
            }
            else {
                normalObj();
            }
        }

        function bindScroll() {
            windowDocument.scroll(function() {
                compare();
            });
        }

        return {
            init : init
        };

    }());

    nav.init();

    // left years
    if ($('.navigation-left li.year').exists()) {

        var leftYears = (function() {

            var openers = $('li.year a'),
                obj = null;

            function bindOpeners() {
                openers.on('click', function() {
                    obj = $(this);
                    if (comparer(obj)) {
                        obj.next().slideUp();
                        return;
                    }
                    obj.next().slideDown();
                });
            }

            function comparer(o) {
                return obj.next().is(':visible') ? true : false;
            }

            function init() {
                bindOpeners();
            }

            return {
                init: init
            };

        }());

        leftYears.init();
    }

    // back top
    if ($('.back-top').exists()) {
        
        var backTop = (function() {

            var opener = $('.back-top'),
            page       = $('body, html');

            function init() {
                bindOpener();
            }

            function bindOpener() {
                opener.on('click', function(e) {
                    e.preventDefault();
                    page.animate({ scrollTop: 0 }, 400);
                });
            }

            return {
                init : init
            };

        }());

        backTop.init();
    }

    // job share
    function jobShare() {

        var openers = $('.share a'),
            o       = null;

        function bindOpeners() {
            openers.on('click', function(e) {
                o = $(this);
                switch(getType(o)) {
                    case 'mail' :
                    break;

                    case 'facebook' :
                        e.preventDefault();
                        openWindow('http://www.facebook.com/sharer.php?p[url]' + document.URL + '&p[title]' + getName(o) + ' &p[images][0]' + getImage(o), 'Compartilhe no Facebook');
                    break;

                    case 'twitter' :
                        e.preventDefault();
                        openWindow('http://www.twitter.com/share?url=' + document.URL, 'Compartilhe no Twitter');
                    break;

                    case 'pint' :
                        e.preventDefault();
                        openWindow('http://pinterest.com/pin/?url=' + document.URL, 'Pint it');
                    break;
                }
            });
        }

        function openWindow(url, name) {
            window.open(url, name, "menubar=1,resizable=1,width=670,height=320");
        }

        function getType(o) {
            return o.data('type');
        }

        function getName(o) {
            return o.data('name');
        }

        function getImage(o) {
            return o.data('image');
        }


        function init() {
            bindOpeners();
        }

        return {
            init : init
        };
    };

    var jobShare = new jobShare();
    jobShare.init();
});